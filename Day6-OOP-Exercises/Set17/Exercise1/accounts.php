<?php

require("account.php");
$person1 = new account(5000);
$person2 = new account(-10);

echo "<br><h2>Initial Balances</h2>" . "<br>";

echo $person1->getBalance() . "<br>";
echo $person2->getBalance() . "<br>";

echo "<br><h2>Balance after both withdraw $50</h2>" . "<br>";

$person1->debit(50);
$person2->debit(50);

echo $person1->getBalance() . "<br>";
echo $person2->getBalance() . "<br>";

echo "<br><h2>Balance after both deposit $50</h2>" . "<br>";

$person1->credit(50);
$person2->credit(50);

echo $person1->getBalance() . "<br>";
echo $person2->getBalance() . "<br>";