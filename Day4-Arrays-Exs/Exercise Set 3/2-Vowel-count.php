<?php

$display = false;
if (isSet($_GET['submitBtn'])){
    $display = true;
}

echo ' 
<form action="2-Vowel-count.php">
	<input type="text" name="word"/>
	<input type="submit" name="submitBtn"/>
</form>';


function vowelCount($word){
    $vowels = 0;
    for ($i = 0; $i < strlen($word); $i++) {
        if ($word[$i] == 'a' OR $word[$i] == 'e' OR $word[$i] == 'i' OR $word[$i] == 'o' OR $word[$i] == 'u'){
            $vowels++;
        }
    }
    return $vowels;
}

if ($display){
    echo "The are ". vowelCount($_GET['word']) ." vowels in {$_GET['word']}!";
    
    }

?>