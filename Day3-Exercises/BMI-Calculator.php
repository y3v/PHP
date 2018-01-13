<?php
if (isset($_GET["submitBtn"])){
    if ($_GET["weight"]+0 < 0 OR $_GET["height"]+0 < 0){
        $errorMessage = "The weight and/or can not be less than zero";
    }
    else{
        $errorMessage = "";
        $bmi = "Your BMI is " . ($_GET["weight"]+0)/(($_GET["height"]+0)*($_GET["height"]+0));
        echo $bmi;
    }
}

if (isset($_GET["resetBtn"])){
    $_GET["height"] = "0";
    $_GET["weight"] = "0";
}

include "bmi.html";

?>