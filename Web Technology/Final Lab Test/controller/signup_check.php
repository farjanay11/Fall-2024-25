<?php
require_once("../model/user_model.php");

$ename = $_REQUEST['ename'];
$cname = $_REQUEST['cname'];
$number = $_REQUEST['number'];
$uname = $_REQUEST['uname'];
$password= $_REQUEST['password'];
$confirm_password= $_REQUEST['confirm_password'];

if(empty(trim($ename)) || empty(trim($cname)) || empty(trim($number)) || empty(trim($uname)) || empty(trim($password)) || empty(trim($confirm_password))){
    echo "Fill up all the fields<br>";
}
else if($password !== $confirm_password){
    echo "Paswords doesn't matched! <br>";
}
else{
    //$result = add_user($ename,$cname, $number, $uname, $password);
    $conn = get_connection();
    $sql = "CREATE TABLE IF NOT EXISTS user_check (ename varchar(255), cname varchar(255), number int(10), unmae varchar(255), password varchar(255))";
    $table = mysqli_query($conn, $sql);
    $result = add_user1($ename,$cname, $number, $uname, $password);

    if($result){
        header("location:../view/signin.html");
    }
    else{
        echo "There is something error inserting the user";
    }
}



?>
