<?php 

echo "<pre>";

$host = "localhost";
$port = "5432";
$dbname = "aula04";
$user = "lucas";
$password = "123";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

$con = pg_connect($connection_string);

var_dump(pg_host($con));

// pg_close($con);

echo "<hr>";

// $nome = "joão da Silva";
// $email = "js@gmail.com";
// $senha = "123";
// $cpf = "1231321";
// $rg = "1231321";

// $query = "INSERT INTO tb_alunos (nome, email,senha,cpf,rg) VALUES ('{$nome}', '{$email}', '{$senha}','$cpf','$rg')";

// pg_query($con,$query);

$resultado = pg_query("SELECT * FROM tb_alunos");

var_dump($resultado);

// $alunos = pg_fetch_all($resultado);
// $alunos2 = pg_fetch_array($resultado);
// $alunos3 = pg_fetch_assoc($resultado);

// var_dump($alunos);
// echo "<hr>";
// var_dump($alunos2);
// echo "<hr>";
// var_dump($alunos3);

// foreach ($alunos as $aluno) {
// 	var_dump($aluno);
// }

while ($row = pg_fetch_assoc($resultado)) {
		
	var_dump($row);
}