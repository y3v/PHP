
<?php

//Questions: Writing only works when URL is absolute.... 

// $file = "U:\git\PHP\Day3-Exercises\info.txt";
$file = "C:\Users\Yev\git\PHP\Day3-Exercises\info.txt";

$FILEH = fopen($file, 'r') or die("Cannot open $file");
$inline = fgets($FILEH);
$userInfo = array();

while (! feof($FILEH)) {
    $temp = explode(",", $inline);
    $userInfo[$temp[0]] = $temp[1];
    $inline = fgets($FILEH);
}
fclose($FILEH);

if (isset($_POST["button"])) {
    $cc = $_POST["cc"];
    
    $name = $_POST["name"];
    
    $namePattern = "/^[[:upper:]][[:alpha:]]+/";
    $ccPattern = "/[[:digit:]]{16}/";
    
    if (preg_match($namePattern, trim($name), $matches, PREG_OFFSET_CAPTURE)) {
        $nameMessage = "";
    } else {
        $nameMessage = "Please start your name with a Capital Letter!!";
    }
    
    if (preg_match($ccPattern, $cc, $matches2, PREG_OFFSET_CAPTURE)) {
        $ccMessage = "";
    } else {
        $ccMessage = "Credit card information is incorrect!";
    }
    
    if (empty($nameMessage) and empty($ccMessage)) {
        $FILEH = fopen($file, 'a+') or die("Cannot open $file");
        // $inline = fgets($FILEH);
        // $userInfo = array();
        fputs($FILEH, $name . ',' . $cc . "\n");
        fclose($FILEH);
        $name = "";
        $cc = "";
    }
}

if (isset($_FILES['upload'])) {
    if ($_FILES['upload']['error'] > 0) {
        // File upload fails. See next slide for detailed info about the
        // meaning of the error code.
    } 
    else {
        $allowed = array(
            'image/jpeg','image/jpg'
        );
        
        if (in_array($_FILES['upload']['type'], $allowed)) {
            $tmp = $_FILES['upload']['tmp_name'];
            echo $_FILES['upload']['tmp_name'] . "\n";
            echo $_FILES['upload']['name'];
            $dst = "C:/Users/Yev/Pictures/Test/{$_FILES['upload']['name']}";
        }
        if (move_uploaded_file($tmp, $dst)) {
            // Success !
        }
    } // End of else
      // Manually delete the temporary uploaded file if // it still exists
    $tmp = $_FILES['upload']['tmp_name'];
    if (file_exists($tmp) && is_file($tmp))
        unlink($tmp);
}

include "form.html";

?>