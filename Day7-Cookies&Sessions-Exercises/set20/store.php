<?php

require("Item.Class.php");

session_start();

if (!isset($_SESSION['products'])){
    $_SESSION['products'] = array();
    $_SESSION['products'][] = new Item("Hockey Stick", 59.99);
    $_SESSION['products'][] = new Item("T-Shirt", 29.99);
    $_SESSION['products'][] = new Item("Skateboard", 35.99);
}



foreach ($_SESSION['products'] as $key => $val) {
    echo '<form action="cart.php">
    <h3>'. $val->getName() .'</h3>
    <h4>'. $val->getPrice() .'</h4>
    <input type="hidden" name="price" value="'. $val->getPrice() .'"/>
    <button name="item" value="'. $val->getName() .'">Add to Cart</button>
    </form>';    
}

echo '<form action="cart.php">
		<button name="show" value="show">Show Cart</button>
	</form>';

