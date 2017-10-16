<?php 


$cursos = [
	'500' => 'Desenvolvimento Web com PHP',
	'501' => 'Desenvolvimento Orientado a objetos com PHP',
	'502' => 'Desenvolvimento Enterprise com PHP',
	'503' => 'Segurança em PHP',
	'600' => 'HTML5 & CSS3 Fundamentals',
	'601' => 'Desenvolvimento Web com JavaScript e jQuery',
	'602' => 'Mobile Apps para iOS e Android com HTML5 e PhoneGap'

];

function lista_cursos($num)
{
	if ($num == 1) {
		$curso = rand(500,503);
	}
	if ($num == 2) {
		$curso = rand(600,602);
	}

	return $curso;
}

