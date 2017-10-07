<?php 

$string1 = 'String qualquer';
$string2 = "Outra String";
$inteiro = 10;
$float   = 10.5;
$stringResultado = $string1 + $string2;
var_dump($stringResultado);
echo '<br>';
$teste1 = '10 casas';
$teste2 = '15 casas';
$teste3 = $teste1 + $teste2;
var_dump($teste3);
echo '<br>';
$string3 = '10 casas' + 10;
var_dump($string3);
echo '<br>';
$string4 = 'qualquer texto' + 10;
var_dump($string4);
echo '<br>';
$string1 = (bool)$string1;//Casting para booleano
var_dump($string1);
echo '<br>';
$inteiro = (string) $inteiro;
var_dump($inteiro);
$float = (int) $float;
echo '<br>';
var_dump($float);