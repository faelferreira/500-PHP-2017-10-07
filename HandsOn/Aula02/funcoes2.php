<?php 

// $tamanhoArray = 5;
// $numeros = array();

// for ($i=0; $i < $tamanhoArray; $i++) { 
// 	$numeros[] = mt_rand(0,10);
// }

echo "<pre>";

function gerarAleatorio($tam = 5, $num1 = 0, $num2 = 10){
	for ($i=0; $i < $tam; $i++) { 
		$numeros[] = mt_rand($num1,$num2);
	}
	return $numeros;
}

function isPar($array){
	foreach ($array as $key => $value) {
		if ($value % 2 == 0) {
			$pares[] = $value;
		}
	}
	return $pares;
}

$array = gerarAleatorio();
// $array2 = gerarAleatorio(3,16,30);
var_dump($array);
// var_dump($array2);
$arrayPares = isPar($array);
var_dump($arrayPares);

echo "<hr>";

$numeros = gerarAleatorio(5);
var_dump($numeros);
$impares = array_filter($numeros, function($valor) {
	if ($valor == 1) {
		return $valor;
	}
});

var_dump($impares);

echo "<hr>";

$nomes = ['Lucas', 'João', 'Marcos', 'Lucas'];

$encontrado =  array_filter($nomes, function($nome){
	if ($nome == 'Lucas') {
		return $nome;
	}
});

var_dump($encontrado);