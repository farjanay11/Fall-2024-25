<?php
function get_connection(){

    $conn = mysqli_connect("127.0.0.1", "root", "", "crud" );
    return $conn;
}

function add_user($name, $password, $email, $age)
{
    $conn = get_connection();
    $sql = "insert into user values ('$name', '$password', '$email', '$age')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function login($name, $password){
    $conn = get_connection();
    $sql = "select * from user where name = '{$name}' and password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        return true;
    }
    else{
        return false;
    }
}

function show_users(){
    $conn = get_connection();
    $sql = "select * from user";
    $result = mysqli_query($conn, $sql);
    return $result;
    // while($row = mysqli_fetch_assoc($result)){
    //     echo "<br>";
    //     print_r($row);
    // }
}

function user_info($name){
    $conn = get_connection();
    $sql = "select * from user where name = '$name'";
    $result = mysqli_query($conn, $sql);
    // var_dump($result);

    $row = mysqli_fetch_assoc($result);
    return $row; 
    
}


?>