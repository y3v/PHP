<?php

$display = false;
if (isSet($_GET['submitBtn'])){
    $display = true;
}

echo '
<form action="7-search-terms.php">
	<input type="text" name="word"/>
	<input type="submit" name="submitBtn"/>
</form>';


function convert($word){
    if (preg_match('/^(").+(")$/', $word)){
        return $word;
    }
    else if (preg_match('/^(?!").*/', $word)){
        return explode(" ", $word);
    }
}

if ($display){
    echo var_dump(convert($_GET['word']));
}
