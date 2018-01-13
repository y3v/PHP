<?php

$display = false;
if (isSet($_GET['submitBtn'])){
    $display = true;
}

echo '
<form action="4-Palindrome.php">
	<input type="text" name="word"/>
	<input type="submit" name="submitBtn"/>
</form>';


function convert($word){
    $wordCheck = strrev($word);
    if ($word == $wordCheck){
        return true;
    }
    else{
        return false;
    }
}

if ($display){
    if (convert($_GET['word'])){
        echo "Your word is a palindrome";
    }
    else{
        echo "Your word is not a palindrome";
    }
    
}
