<?php

$display = false;
if (isSet($_GET['submitBtn'])){
    $display = true;
}

echo '
<form action="9-gcd.php">
	<input type="text" name="num1"/>
    <input type="text" name="num2"/>
	<input type="submit" name="submitBtn"/>
</form>';


function check($num1, $num2){
    if ($num1== 1 OR $num2== 1){
        return 1;
    }
    $gcd = -1;
    for ($i = 2; $i < 100; $i++) {
        if ($num1%$i==0 AND $num2%$i==0){
            $gcd = $i;
        }
    }
    return $gcd;
}

if ($display){
    echo "The GCD is : " . check($_GET['num1'],$_GET['num2']);
}
