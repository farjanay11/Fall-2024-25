<?php

// if(isset($_POST['signup'])){
require_once("../model/user_model.php");

$ename = $_REQUEST['ename'];
$uname = $_REQUEST['uname'];
$number = $_REQUEST['number'];
$password= $_REQUEST['password'];
$confirm_password= $_REQUEST['confirm_password'];

if(empty(trim($ename)) || empty(trim($uname)) || empty(trim($password)) || empty(trim($confirm_password)) || empty(trim($number))){
    echo "please fill all the input fields<br>";
}
else if($password !== $confirm_password){
    echo "Pasword and confirm password does not match <br>";
}
else{
    // echo "hello";
    
    $result = add_user($ename,$uname, $number, $password);
    if($result){
        // echo "User successfully inserted in the database";
        header("location:../view/signin.html");
    }
    else{
        echo "There is something error inserting the user";
    }
}


?>
