<?php
if (isset($_GET["submitBtn"])){
    if ($_GET["amount"]+0 < 0 OR !isset($_GET["amount"])){
        $errorMessage = "The amount can not be less than zero";
    }
    else{
        $errorMessage = "";
        $conversion = "$" . $_GET["amount"] . " into Euros is €" .($_GET["amount"] + 0) * 0.82;
        echo $conversion;
    }
}

if (isset($_GET["resetBtn"])){
    $_GET["amount"] = "0";
}

include "currency.html";

?>