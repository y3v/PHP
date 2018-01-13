<?php


$array = array("Everyone", "says", "Kelly", "is", "REALLY", "awesome");


function check($array){
    $length = count($array)/2;
    if ($length % 2 != 0){
        return $array;
    }
    $chunks = array_chunk($array,$length);
    $chunks[0] = array_reverse($chunks[0]);
    $chunks[1] = array_reverse($chunks[1]);
    return array_merge($chunks[0],$chunks[1]);
}

$array = check($array);

foreach ($array as $key => $val) {
    echo $val . " ";
}

