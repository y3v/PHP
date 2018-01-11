<?php

if (isset($_POST["button"])){
    $cc = $_POST["cc"];
    
    $name = $_POST["name"];

    $namePattern = "/^[[:upper:]][[:alpha:]]+/";
    $ccPattern = "/[[:digit:]]{16}/";
    
    if(preg_match($namePattern,trim($name),$matches, PREG_OFFSET_CAPTURE)){
        $nameMessage = "";
    }
    else{
        $nameMessage = "Please start your name with a Capital Letter!!";
    }  
    
    if(preg_match($ccPattern,$cc,$matches2, PREG_OFFSET_CAPTURE)){
        $ccMessage = "";
    }
    else{
        $ccMessage = "Credit card information is incorrect!";
    } 
}

include "NewFile.html";

?>