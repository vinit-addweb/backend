<?php

    $set=$_POST['username'];
    $b=$_POST['password'];
    session_start();
    $_SESSION["user"]=$set;
    header('Location:session2.php');
    
?>

