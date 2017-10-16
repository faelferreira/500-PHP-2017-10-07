<?php 

echo "<pre>";
function cubo($num){
	return $num*$num*$num;
}

$a = array(1,2,3,4,5);
$b = array_map('cubo', $a);

var_dump($b);

echo "<hr>";

function par($num){
	if ($num % 2 == 0) {
		return $num;
	}
}
function impar($num){
	if ($num % 2 != 0) {
		return $num;
	}
}

$vetor = [6,7,8,9,10,12,13];

echo "Impares: \n";
print_r(array_filter($vetor, 'impar'));
echo "Pares: \n";
print_r(array_filter($vetor, 'par'));

echo "<hr>";

$vetor = [6,7,8,9,10,12,13];

print_r(array_chunk($vetor, 3));

echo "<hr>";

$chaves = array(1,2,3);
$valores = array('um', 'dois', 'tres');

$vetor = array_combine($valores, $chaves);

print_r($vetor);

echo "<hr>";

$nums1 = [1,2,3,4,5,6];
$nums2 = [3,2,4];

$diff = array_diff($nums1, $nums2);

print_r($diff);

echo "<hr>";

$array1 = ['a', 'b', 'cor' => 'verde'];
print_r($array1);
$array2 = ['cor' => 'azul', 'd', 'xadrez'];
print_r($array2);
print_r(array_merge($array1,$array2));

echo "<hr>";

$vetor = array_fill(8, 10, 'PHP');
print_r($vetor);

$alunos= [
	[
		'nome' => '',
		'matricula' => '',
		'notas' => [
			'n1' => 9,
			'n2' => 8
		]
		,
		'presenca' => 80,
	],
	[
		'nome' => '',
		'matricula' => '',
		'notas' => [
			'n1' => 9,
			'n2' => 8
		]
		,
		'presenca' => 80,
	],
	[
		'nome' => '',
		'matricula' => '',
		'notas' => [
			'n1' => 9,
			'n2' => 8
		]
		,
		'presenca' => 80,
	],
	[
		'nome' => '',
		'matricula' => '',
		'notas' => [
			'n1' => 9,
			'n2' => 8
		]
		,
		'presenca' => 80,
	],

];

