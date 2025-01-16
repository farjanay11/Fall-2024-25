<?php
function get_connection(){
    $conn = mysqli_connect("127.0.0.1", "root", "", "check");
    return $conn;
}

function add_user($name, $email, $password, $type, $dropdown){
    $conn = get_connection();
    $sql = "insert into quiz (name, email, password, type, dropdown) values('$name', '$email', '$password', '$type', '$dropdown')";
    $result  = mysqli_query($conn, $sql);
    if($result){
        return true;
    }
    else{
        return false;
    }
}


function addUser($name, $password, $email, $type, $status = "Active"){
    $conn = get_Connection();
    $sql = "insert into users (username, password, email, type, status) values ('$name', '$password', '$email', '$type', '$status')";
    $result = mysqli_query($conn, $sql);
    if($result){
        return true;
    }
    else{
        return false;
    }
}


?>