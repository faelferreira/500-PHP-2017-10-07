<?php 

// Condição Aprovado -> Nota >= 7 && Frequencia >= 8;

// Condição Recuperação -> Nota >= 5 && AND < 70 && Frequencia >= 8

// Condição Reprovado -> Nota < 5 || OR Frequencia < 8

$nota = 8;
$frequencia = 7;

if ($nota >= 7 && $frequencia >= 8) {

	echo "APROVADO!";

} elseif ( $nota >=5 && $nota < 7 && $frequencia >= 8){

	echo "RECUPERAÇÃO";

}elseif($nota < 5 || $frequencia < 8) {

	echo "REPROVADO";
}

