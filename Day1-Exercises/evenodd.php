<?php
    $numbers = array (11,23,72,44);
    
    function evenOrOdd($number){
        if ($number%2 == 0){
            return $number . " is Even\r\n.";
        }
        else{
            return $number . " is Odd\r\n.";
        }
    }
    
    for ($i = 0; $i < count($numbers); $i++) {
        echo evenOrOdd($numbers[$i]);
    }
?>