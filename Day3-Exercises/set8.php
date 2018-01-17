<?php

//$file = "U:\git\PHP\Day3-Exercises\info.txt";
$file = "info.txt";

$FILEH = fopen($file, 'r') or die ("Cannot open $file");
$inline = fgets($FILEH);
$userInfo = array();

while(!feof($FILEH)){
    $temp = explode(",",$inline);
    $userInfo[$temp[0]] = $temp[1];
    $inline = fgets($FILEH);
}
fclose($FILEH);

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
    
    if (empty($nameMessage) AND empty($ccMessage)){
        $FILEH = fopen($file, 'a+') or die ("Cannot open $file");
        //$inline = fgets($FILEH);
        //$userInfo = array();
        fputs($FILEH, $name.','.$cc."\n");
        fclose($FILEH);
    }
}

include "NewFile.html";


?>