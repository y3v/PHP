<?php
if (isset($_GET["submitBtn"])){
    if ($_GET["distance"]+0 < 0){
        $errorMessage = "Distance cannot be less than 0";
    }
    else{
        $errorMessage = "";
        if ($_GET['type'] == "km"){
            $conversion = ($_GET["distance"]+0) / 1.609;
            echo "<h2> The distance in miles is : {$conversion} </h2>";
        }
        else{
            $conversion = ($_GET["distance"]+0) * 1.609;
            echo "<h2> The distance in km is : {$conversion} </h2>";
        }
    }
}

if (isset($_GET["resetBtn"])){
    $_GET["distance"] = "0";
}

include "distance.html";

?>