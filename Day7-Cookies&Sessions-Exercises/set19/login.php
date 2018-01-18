<?php

if(!isset($_SESSION['username'])){
    session_start();
}

$errors = "";

if (isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username == "Yev" AND $password=="password"){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $errors= "";
        //echo $_SESSION['username'] . " " .   $_SESSION['password'] = $password;
    }
    else{
        $errors = "Login and/or password is incorrect";
    }
}

if(isset($_SESSION['username'])){
    ob_start();
    header('Location: welcome.php');
    ob_end_flush();
    exit();
}

include "login.html";