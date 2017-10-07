<?php 

echo "<pre>";

$idade = 17;

if ($idade >= 18) {
	echo $idade;
} else {
	echo "Menor Idade";
}


echo "<hr>";


echo ($idade >= 18) ? $idade : "Menor Idade";