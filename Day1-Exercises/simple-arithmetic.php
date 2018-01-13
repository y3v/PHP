<?php
$num1 = 5;
$num2 = 6;
echo "Addition: " . ($num1 + $num2);
echo "  Subtraction: " . ($num1 - $num2);
echo "  Multiplication: " . ($num1 * $num2);
echo "  Division: " . ($num1 / $num2);

if ($num1 > $num2){
    echo " First number is greater than Second"; 
}
else if ($num1 < $num2){
    echo " First number is less than Second"; 
}
else{
    echo "  They are equal!";
}
?>