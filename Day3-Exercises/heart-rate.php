<?php
if (isset($_GET["submitBtn"])){
    if ($_GET["age"]+0 < 0 OR $_GET["age"]+0 > 110){
        $errorMessage = "Age must be between 0 - 110";
    }
    else{
        $errorMessage = "";
        $rate = 220-($_GET["age"]+0);
        echo "<p> Your heart rate is: {$rate} while your upper limit is ". $rate*0.85 ." and the lower limit is ". $rate*0.65 ." </p>";
    }
}

if (isset($_GET["resetBtn"])){
    $_GET["age"] = "0";
}

include "heart-reate.html";

?>