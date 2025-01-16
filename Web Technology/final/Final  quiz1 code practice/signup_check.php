<?php

// require_once("usermodel.php");
// echo "hello";
// echo $dropdown. " " .$type;
 
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['type'];
$dropdown = $_POST['dropdown'];

function get_connection(){
    $conn = mysqli_connect("127.0.0.1", "root", "", "check");
    return $conn;
}

function add_user($name, $email, $password, $type, $dropdown){
    $conn = get_connection();
    $createtable = "create table quiz3(
        name varchar(200),
        email varchar(200),
        password varchar(200),
        type varchar(200),
        dropdown varchar(200))";
    $result1 = mysqli_query($conn, $createtable );
    $sql = "insert into quiz3 (name, email, password, type, dropdown) values('$name', '$email', '$password', '$type', '$dropdown')";
    $result  = mysqli_query($conn, $sql);
    if($result){
        return true;
    }
    else{
        return false;
    }
}

$signup = add_user($name, $email, $password,$type,$dropdown);
if($signup){
    echo "ok";
}
else{
    echo "not ok";
}


?>