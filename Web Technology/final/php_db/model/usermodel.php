<?php

function getConnection(){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'check');
    return $conn;
}


function login($id, $password){
    $conn = getConnection();
    $sql = "select * from first_check  where id = '{$id}' and password = '{$password}'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        return true;
    }
    else{
        return false;
    }
}
function addUser($name, $password, $id, $email){
    $conn = getConnection();
    $sql = "insert into first_check values ('$name', '$password', '$id', '$email')";
    $result = mysqli_query($conn, $sql);
    if($result){
        return true;
    }
    else{
        return false;
    }
}


?>