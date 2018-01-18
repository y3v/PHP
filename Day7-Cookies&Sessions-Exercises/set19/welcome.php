<?php

session_start();

if (isset($_SESSION['username'])){
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    
    echo "Hello. Your username is {$username} with the password of {$password}";
}
else{
    echo "Nah. Access Restricted! You are not welcome";
}