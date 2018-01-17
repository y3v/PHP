<?php

require("Item.Class.php");

$file = "C:\Users\Yev\git\PHP\Day6-OOP-Exercises\Set24\cart.txt";

if (isset($_GET['delete'])){
    $FILEH = fopen($file, 'w') or die("Cannot open $file");
    fputs($FILEH, " ");
    fclose($FILEH);
}

$FILEH = fopen($file, 'r') or die("Cannot open $file");
$inline = fgets($FILEH);
$total = 0;

$items = array();

while (! feof($FILEH)) {
    $temp = explode(":", $inline);
    if (!empty($temp[0])){
        $items[] = new Item($temp[0],$temp[1]);
    }
    $inline = fgets($FILEH);
}
fclose($FILEH);

if (isset($_GET['item'])){
    $items[] = new Item($_GET['item'] , $_GET['price']);
    
    $FILEH = fopen($file, 'r+') or die("Cannot open $file");
    foreach ($items as $key => $val) {
        fputs($FILEH, $val->getName() . ':' . $val->getPrice() . "\r\n");
        //echo $val->getName() . ':' . $val->getPrice();
        $total += $val->getPrice();
    }
    
    fclose($FILEH);
}

include "products.html";

foreach ($items as $key => $val) {
    echo "<p>" . $val->getName() . " " . $val->getPrice() . "</p>";
}

if ($total != 0){
    echo "_______________________________________<br><h2>Total Price: $" . $total . "</h2>"; 
}