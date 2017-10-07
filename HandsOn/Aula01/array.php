<?php 

echo "<pre>";

$var[] = '4linux';
$var[] = 'PHP';

$var[0] = 'Linux';


var_dump($var);

echo "<hr>";

$pessoa = [
	'nome' => 'Lucas Marques',
	'idade' => 24,
	'profissao' => 'Programador'
];

$pessoa['nome'] = 'Lucas Cesar Marques';

var_dump($pessoa);

echo "<hr>";


$cursos = [
	'PHP' => [
		'Iniciante'=> 500, 
		'Intermediário' => 501,
		'Avançado' => 502],
	'LINUX' => [
		'Iniciante' => 450,
		'Intermediário' => 451,
		'Avançado' => 452],
];


$cursos['PHP'] += ['extra' => 900];


var_dump($cursos);





var_dump($pessoa);