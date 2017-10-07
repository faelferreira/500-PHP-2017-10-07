<?php 

$var = "0 " ; // $var é uma string
$var += 2; // $var agora é um inteiro
$var = $var + 1.3; // $var agora é um float
$var = 5 + " 10 carros " ; // inteiro ( $var = 15)
$var = "1 casa " + " 1 casa " ; // inteiro ( $var = 2)


//------------------------------------------------

$var = "0 " ; // $var é uma string
echo $var;
echo "<hr>";
$var += 2; // $var agora é um inteiro
echo $var;
echo "<hr>";
$var = $var + 1.3; // $var agora é um float
echo $var;
echo "<hr>";
$var = 5 + " 10 carros " ; // inteiro ( $var = 15)
echo $var;
echo "<hr>";
$var = "1 casa " + " 1 casa " ; // inteiro ( $var = 2)
echo $var;
echo "<hr>";