<?php

$display = false;
if (isSet($_GET['submitBtn'])){
    $display = true;
}

echo '
<form action="3-1337-5p34k.php">
	<input type="text" name="word"/>
	<input type="submit" name="submitBtn"/>
</form>';


function convert($word){
    for ($i = 0; $i < strlen($word); $i++) {
        switch($word[$i]){
            case 'A':
                $word[$i] = '4';
                break;
            case 'E':
                $word[$i] = '3';
                break;
            case 'G':
                $word[$i] = '9';
                break;
            case 'L':
                $word[$i] = '1';
                break;
            case 'O':
                $word[$i] = '0';
                break;
            case 'S':
                $word[$i] = '5';
                break;
            case 'T':
                $word[$i] = '7';
                break;
            case 'a':
                $word[$i] = '4';
                break;
            case 'e':
                $word[$i] = '3';
                break;
            case 'g':
                $word[$i] = '9';
                break;
            case 'l':
                $word[$i] = '1';
                break;
            case 'o':
                $word[$i] = '0';
                break;
            case 's':
                $word[$i] = '5';
                break;
            case 't':
                $word[$i] = '7';
                break;
        }
    }

    return $word;
}

if ($display){
    echo "1337 5p34k: ". convert($_GET['word']);
    
}
