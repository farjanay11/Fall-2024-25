<?php

session_start();

if(isset($_POST["submit"]))
{
$name = trim($_POST["name"]);
$id = trim($_POST["id"]);
$password = trim($_POST['password']);
$confirm_pass = trim($_POST['con_password']);

if(empty($name) || empty($id) || empty($password) || empty($confirm_pass) || !isset($_POST['type'])){
    echo "please fill the the input fileds";
}
else if($confirm_pass !== $password){
echo "password and confirm password should be matched";

}
else{
    if(!isset($_SESSION['users'])){
        $_SESSION['users'] = [];
    }
    $type = $_POST['type'];
    $user = ["name" => $name, "id" => $id, "pass" => $password, "type" => $type];
    $_SESSION['users'][] = $user;
    header("location:login.html");
}

}
else{
    header("location:registration.html");
}

?>