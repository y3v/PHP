<?php
if (isset($_GET["submitBtn"])){
    if ($_GET["income"]+0 < 0 OR $_GET["tax"]+0 < 0){
        $errorMessage = "Income and/or tax values cannot be less than 0";
    }
    else{
        $errorMessage = "";
        $net = ($_GET["income"]+0) * ((100-($_GET["tax"]+0))/100) * ((100-4.3)/100);
        echo "<p> Your net Salary is $: {$net} </p>";
    }
}

if (isset($_GET["resetBtn"])){
    $_GET["income"] = "0";
    $_GET["tax"] = "0";
}

include "salary.html";

?>