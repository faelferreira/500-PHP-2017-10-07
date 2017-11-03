<?php 

require_once 'data/conexao.php';

session_start();

$raiz = "/4500-PHP/HandsOn/Aula05/projeto/";
$login = "{$raiz}login.php";

function login($dados){

	if (!isset($dados['email'])) {
		return false;
	}
	if (!isset($dados['senha'])) {
		return false;
	}

	$retorno = ['nome' => 'Lucas', 'id' => 1];

	if( $retorno ){
		$_SESSION['logado'] = true;
		$_SESSION['usuario'] = $retorno['nome'];
		$_SESSION['id'] = $retorno['id'];
		return true;
	}else{
		return false;
	} 
}

function deslogar(){  //Destroi as sessões de login ativa
	session_start();
	session_destroy();
	header("Location:/4500-PHP/HandsOn/Aula05/projeto/login.php");
}

function verificarLogin(){ // Verifica se o usuário está logado... direcionado para pagina correta
	if( isset( $_SESSION['logado'] ) ){
		return true;
	}else{
		header("Location:/4500-PHP/HandsOn/Aula05/projeto/login.php");
	}
}

function isLogado(){
	if (isset($_SESSION['logado'])) {
		return true;
	}
}


// echo $login;