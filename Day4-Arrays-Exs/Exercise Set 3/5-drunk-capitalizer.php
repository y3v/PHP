<?php

$display = false;
if (isSet($_GET['submitBtn'])){
    $display = true;
}

echo '
<form action="5-drunk-capitalizer.php">
	<input type="text" name="word"/>
	<input type="submit" name="submitBtn"/>
</form>';


function convert($word){
        $word = strtolower($word);
        for ($i = 0; $i < strlen($word); $i++) {
            $random = rand(1,2);
            if ($random == 2){
                $word[$i] = strtoupper($word[$i]);
            }
        }
        return $word;
}

if ($display){
    echo convert($_GET['word']);
}
