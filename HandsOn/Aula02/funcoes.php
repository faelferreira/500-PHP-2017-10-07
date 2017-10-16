<?php 

echo "<pre>";

$num = 9;

function isParorImpar($num){
	if ($num % 2 == 0) {
		return "PAR";
	}
	else{
		return "IMPAR";
	}
}

function isMaior($num1, $num2){
	$maior;

	if ($num1 > $num2) {
		$maior = $num1;
	} else if ($num2 > $num1) {
		$maior = $num2;
	} else	{
		$maior =  'Iguais';
	}

	return $maior;
}

$resultado = isParorImpar($num);
echo $resultado;

echo "<br>";
echo $num;
echo "<hr>";

echo isMaior(10,10);