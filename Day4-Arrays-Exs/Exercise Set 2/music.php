<?php

$totalSongs = "5343";
$totalHours = "523";

$newspages = $_GET["newspages"];
if (empty($_GET["newspages"])){
    $newspages = 5;
}

$artists = array("Britney Spears", "Christina Aguilera", "Justing Beiber");
$artists[] = "Lady Gaga";
$artists[] = "Young Jeezy";

//part of exercises to load files from directory cannot be done yet because we haven't gone over this material yet

include "music.html";