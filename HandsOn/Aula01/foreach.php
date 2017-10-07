<?php 

echo "<pre>";

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


foreach ($cursos as $tipo => $curso) {
	// var_dump($tipo);
	var_dump($curso['Avançado']);
}

echo "<hr>";

$pessoas = [
	[
		'nome' => 'Lucas Marques',
		'idade' => 24,
		'profissao' => 'Programador',
		'cursos' => ['PHP', 'LINUX']
	],
	[
		'nome' => 'Joao',
		'idade' => 34,
		'profissao' => 'Programador',
		'cursos' => ['Python', 'BD']
	],
	[
		'nome' => 'Antonio',
		'idade' => 34,
		'profissao' => 'Desenvolvedor',
		'cursos' => ['PHP', 'Python']
	]
];

foreach ($pessoas as $pessoa) {	
	foreach ($pessoa['cursos'] as $curso){		
			if ($curso == 'PHP') {
				echo $pessoa['nome'];
				echo "<br>";
			}
	}
	

}



// var_dump($cursos);