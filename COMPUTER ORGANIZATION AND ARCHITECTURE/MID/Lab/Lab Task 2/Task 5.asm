.model small
.stack 100h
.data

a db 'Input first number: $'
b db 'Input second number: $'
c db 'Input third number: $'
result_msg db 'Biggest number : $'


.code
main proc
    mov ax, @data
    mov ds, ax

    mov ah, 9
    lea dx, a
    int 21h

    mov ah, 1
    int 21h
    sub al, '0'
    mov bl, al 

    mov ah, 2
    mov dl, 10
    int 21h
    mov dl, 13
    int 21h

    mov ah, 9
    lea dx, b
    int 21h

    mov ah, 1
    int 21h
    sub al, '0'
    mov cl, al

    mov ah, 2
    mov dl, 10
    int 21h
    mov dl, 13
    int 21h

    cmp bl, cl
    jge first_is_greater

    mov bl, cl
first_is_greater:

    mov ah, 9
    lea dx, c
    int 21h

    mov ah, 1
    int 21h
    sub al, '0'
    mov dl, al

    cmp bl, dl
    jge result_ready

    mov bl, dl
result_ready:

    mov ah, 9
    lea dx, result_msg
    int 21h

    add bl, '0'
    mov dl, bl
    mov ah, 2
    int 21h


    mov ah, 4Ch
    int 21h

main endp
end main
