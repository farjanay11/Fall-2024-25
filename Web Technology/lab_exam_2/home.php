<?php

session_start();

if(!(isset($_SESSION["status"]))){
    header("location: login.html");
}

?>

<html>
    <head>
        <title>Homepage</title>
    </head>
    <body>
        <?php echo "Hi!  {$_SESSION["username"]}" ;
        // header("location:login.html");
        header("Refresh:11;URL=login.html")
        ?>
        <a href="login.html">go_to_php</a>
        <p><b>Welcome to the homepage!</b></p>
        <a href ="logout.php">Log Out</a>
    </body>
</html>