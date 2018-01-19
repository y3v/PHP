<?php
require("Item.Class.php");

session_start();


if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

if(!isset($_GET['show'])){
    $_SESSION['cart'][] = new Item($_GET['item'],$_GET['price']);
    
    ob_start();
    header('Location: store.php');
    ob_end_flush();
    exit();
}

if(isset($_GET["show"])){
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $val) {
        echo '<div class="cart-box">
        <h3>'. $val->getName() .'</h3>
        <h4>$'. $val->getPrice() .'</h4>
        </div>';
        $total+=$val->getPrice();
    }
    echo "_______________________________________<br><h2>Total Price: $" . $total . "</h2>"; 
}