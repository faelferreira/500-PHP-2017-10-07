<?php
	

	function verificaPagina($pagina){
		if ((basename($_SERVER['PHP_SELF']) == $pagina)) {
			return true;
		} else {
			return false;
		}
	}


	function validaCampo($campo){
		if ($campo == '') {
			return false;
		}

		return true;
	}

	function validaCampos($dados){

		$erros = [];
		foreach ($dados as $chave => $valor) {
			if ($valor == '') {
				$erros[] = $chave; 
			}
		}

		return $erros;
	}

	function exibeCampo($campo){
		return (isset($campo)) ? $campo : ''; 
	}








