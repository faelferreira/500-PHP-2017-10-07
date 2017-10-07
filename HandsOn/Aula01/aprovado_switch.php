<?php 

// Condição Aprovado -> Nota >= 7 && Frequencia >= 8;

// Condição Recuperação -> Nota >= 5 && AND < 70 && Frequencia >= 8

// Condição Reprovado -> Nota < 5 || OR Frequencia < 8

$nota = 4;
$frequencia = 8;

switch (true) {

	case ($nota >= 7 && $frequencia >= 8):
		echo "APROVADO!";
		break;

	case ( $nota >=5 && $nota < 7 && $frequencia >= 8):
		echo "RECUPERAÇÃO!";
		break;

	case ($nota < 5 || $frequencia < 8):
		echo "REPROVADO!";
		break;
	
	default:
		# code...
		break;
}