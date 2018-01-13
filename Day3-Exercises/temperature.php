<?php
if (isset($_GET["submitBtn"])){
    if ($_GET["temp"]+0 < -273 OR $_GET["temp"]+0 > 273){
        $errorMessage = "Enter a realistic temperture";
    }
    else{
        $errorMessage = "";
        if ($_GET['type'] == "cel"){
            $conversion = ($_GET["temp"]+0) * 9/5 + 32;
            echo "<h2> The temperature in F is : {$conversion} </h2>";
        }
        else{
            $conversion = (($_GET["temp"]+0) - 32) / 1.8;
            echo "<h2> The temperature in F is : {$conversion} </h2>";
        }
    }
}

if (isset($_GET["resetBtn"])){
    $_GET["temp"] = "0";
}

include "temperature.html";

?>