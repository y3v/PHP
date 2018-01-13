<?php

$display = false;
if (isSet($_GET['submitBtn'])){
    $display = true;
}

echo ' <form action="1-Days-in-month.php">
	<input type="number" name="month"/>
	<input type="submit" name="submitBtn"/>
</form>';

$months = array(31, "28 (sometimes 29)", 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

if ($display){
    echo "There are ". $months[$_GET['month']-1] ." in the chosen month"; 
}