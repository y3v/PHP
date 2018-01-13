<?php

$display = false;
if (isSet($_GET['submitBtn'])){
    $display = true;
}

echo '
<form action="6-space-fixer.php">
	<input type="text" name="word"/>
	<input type="submit" name="submitBtn"/>
</form>';


function convert($word){
    preg_replace("/[[:space:]]+/", " ", $word);
    
    return $word;
}

if ($display){
    echo convert($_GET['word']);
}
