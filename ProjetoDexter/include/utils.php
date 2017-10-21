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


	// if(isset($_POST['nome'])){
	// 	echo $_POST['nome'];
	// } else {
	// 	echo '';
	// }

	// echo (isset($POST['nome'])) ? $_POST['nome'] : '';









