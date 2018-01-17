<?php

require("Employee.class.php");

$emp1 = new Employee("Yev", "Kantorovich", 99000);
$emp2 = new Employee("Olivier", "LePage", 97999);
$set = false;

$employees = array();

$file = "C:/Users/ykantoro/eclipse-workspace-php/Day6-OOP-Exercises/Set17/Exercise2/employees.txt";
//$file = "C:\Users\Yev\git\PHP\Day3-Exercises\info.txt";

$FILEH = fopen($file, 'r') or die("Cannot open $file");
$inline = fgets($FILEH);

while (! feof($FILEH)) {
    $temp = explode(",", $inline);
    if (!empty($temp[0])){
        $employees[] = new Employee($temp[0],$temp[1],$temp[2]);
    }
    $inline = fgets($FILEH);
}
fclose($FILEH);

if (empty($employees)){
    $emp1 = new Employee("Yev", "Kantorovich", 99000);
    $emp2 = new Employee("Olivier", "LePage", 97999);
    
    $employees[] = $emp1;
    $employees[] = $emp2;
}

if (isset($_GET["update"])){
    $set = true;
    $percent = $_GET["change"]/100+1;
    
    $FILEH = fopen($file, 'r+') or die("Cannot open $file");
    foreach ($employees as $val) {
        $val->setSalary($val->getSalary() * $percent);
        echo "<h3>" . $val->getFname() . " " . $val->getLname() . ". Salary: $" . number_format($val->getSalary(),2, ".", "") . "</h3>";
        fputs($FILEH, $val->getFname() . ',' . $val->getLname() . ',' . number_format($val->getSalary(),2, ".", "")  . "\n");
    }
    
    fclose($FILEH);
    $name = "";
    $cc = "";
}
else{
    
}

if (!$set){
    foreach ($employees as $val) {
        echo "<h3>" . $val->getFname() . " " . $val->getLname() . ". Salary: $" . $val->getSalary() . "</h3>";
    }
}

include "changeSalary.html";
