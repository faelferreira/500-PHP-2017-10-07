<?php 

echo "<pre>";

$num1 = 9;
$num2 = 2;

$mult = $num1 * $num2;
$adic = $num1 + $num2;
$subt = $num1 - $num2;
$divi = $num1 / $num2;
$modu = $num1 % $num2;

var_dump($mult);
var_dump($adic);
var_dump($subt);
var_dump($divi);
var_dump((int)$divi);
var_dump($modu);

echo "<hr>";

$var1 = "10 casas";
$var2 = "5";
$sum = $var1 + $var2;
var_dump($sum);