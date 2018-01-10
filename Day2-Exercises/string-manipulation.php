<?php
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
echo "<p>" . "'First difference between two strings at position {$str_pos} : {$str1[$str_pos]} {$str2[$str_pos]}"
. "</p>";
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("\n", $str);
echo "<br><p>". var_dump($arra1). "</p>";

$path = 'www.example.com/public_html/index.php';
$file = basename($path, ".php");
echo "<p> {$file} </p>";

$cha = 'a';
$next_cha = ++$cha;
if (strlen($next_cha) > 1)
{
    $next_cha = $next_cha[0];
}
echo "<p> {$next_cha} </p>";

$sub_string = 'rayy@';
$str = 'rayy@example.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string)
{
    $str = substr($str, strlen($sub_string));
}
echo $str."<br>";

$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."<br>";

$arraySentence = explode(" ", "The Quick Brown Fox");
echo "<p> {$arraySentence[0]} </p>";

$x = '000547023.24';
$str1 = ltrim($x, '0');
echo "<p> {$str1} </p>";

$my_str = 'The quick brown fox jumps over the lazy dog';
echo "<p>". str_replace("fox", " ", $my_str)." </p>";

$my_url = 'http://www.example.com/5478631';
echo "<p>". substr($my_url, strrpos($my_url, '/' )+1) ." </p>";


?>