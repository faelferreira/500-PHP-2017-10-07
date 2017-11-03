<?php 


if ($valor === NULL) {
	$sql = "SELECT * FROM tb_alunos WHERE nome IS NULL";
} else
$sql = "SELECT * FROM tb_alunos WHERE nome = '" . $valor . "'"; 