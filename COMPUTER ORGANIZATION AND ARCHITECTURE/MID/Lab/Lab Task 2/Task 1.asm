.model small
.stack 100h
.data

input1 db 'Input first Number: $'
inputt2 db 'Input second Number: $'
result db 'Result: $'

.code
main proc

    mov ax, @data
    mov ds, ax

    mov ah, 9
    lea dx, input1
    int 21h     

    mov ah, 1
    int 21h
    sub al, '0'   
    mov bl, al   
           
    ; NEW LINE
    mov ah,2
    mov dl,10
    int 21h
    mov dl,13
    int 21h   

    mov ah, 9
    lea dx, inputt2
    int 21h

    mov ah, 1
    int 21h
    sub al, '0'     

    sub bl, al 
    
        
    ; NEW LINE
    mov ah,2
    mov dl,10
    int 21h
    mov dl,13
    int 21h

    mov ah, 9
    lea dx, result
    int 21h

    add bl, '0'     
    mov dl, bl    
    mov ah, 2
    int 21h

    mov ah, 4Ch
    int 21h
main endp
end main
