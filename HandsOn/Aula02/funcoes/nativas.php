<?php 

echo "<pre>";
// EMPTY
// 0 , "0", FALSE, NULL -> São considerados vazios;

$var = 0;

if (empty($var)) {
	echo 'VAZIO';
}

echo "<hr>";

// ISSET
// Verifica se a váriavel foi setada e possui valor;


if (isset($var)) {
	echo 'setada';
}
echo "<br>";

$nome = 0;

if (!isset($nome)) {
	echo 'não setada';
}

echo "<hr>";

// IS_String

$string = "texto aqui";

if (is_string($string)) {
	echo 'é uma string';
}

echo "<hr>";

$variavel = 'texto';
var_dump($variavel);
unset($variavel);
var_dump($variavel);

echo "<hr>";

$artilheiro = 'Ronaldo';
$gols = 19;

$texto = 'O artilheiro do campeonato , %s tem %d gols';
printf($texto, $artilheiro, $gols);

echo "<hr>";

$string = 'Oi Mundo, Oi, oi';

$curso = '501';

$novaString = str_replace('Oi', 'Tchau', $string);
$nomeCurso = str_replace('501', 'PHP', $curso);

echo $novaString;
echo "<br>";
echo $nomeCurso;

echo "<hr>";

$string = '        P H P         ';
var_dump($string);
var_dump(trim($string));

echo "<hr>";

$string = 'ola mundo';
echo ucfirst($string);

echo "<hr>";

$string = 'ola mundo';
echo ucwords($string);

echo "<hr>";

$string = 'OLA MUNDO';
echo lcfirst($string);

echo "<hr>";

$string = 'Ola, tudo bem?';
$array = str_split($string,3);
var_dump($array);

echo "<hr>";

$nomes = 'Lucas,Joao,Mateus,Cesar';
$nomes = explode(',', $nomes);

var_dump($nomes);

echo "<hr>";

$nomes = array('Lucas','Joao','Mateus','Cesar');
$nomes = implode(',', $nomes);
var_dump($nomes);

echo "<hr>";

echo str_repeat("@", 10);

echo "<hr>";

$texto = 'Star Wars';
var_dump(str_pad($texto, 20));
var_dump(str_pad($texto, 20, '@'));
var_dump(str_pad($texto, 20, '@', STR_PAD_LEFT));
var_dump(str_pad($texto, 20, '@', STR_PAD_BOTH));

echo "<hr>";

$email = 'lucas@linux.org';
$dominio = strstr($email, '@');
echo $dominio;
echo '<br>';
$user = strstr($email, '@', true);
echo $user;

echo "<hr>";

$string = '   Lucas Cesar Marques     ';
echo strlen(trim($string));

echo "<hr>";

$string = '98765432103333';
$procurar = '3';

$pos = strpos($string, $procurar);

if ($pos === false) {
	echo "A string $procurar não foi encontrada;";
} else {
	echo "A string $procurar foi encontrada na posição $pos";
}

echo "<hr>";

$string = '98765432103333';
$procurar = '3';

$pos = strrpos($string, $procurar);

if ($pos === false) {
	echo "A string $procurar não foi encontrada;";
} else {
	echo "A string $procurar foi encontrada na posição $pos";
}

echo "<hr>";

$string = 'dAaaAAbbBBcccCC';
$procurar = 'a';

$pos = strripos($string, $procurar);

if ($pos === false) {
	echo "A string $procurar não foi encontrada;";
} else {
	echo "A string $procurar foi encontrada na posição $pos";
}

echo "<hr>";

$string = 'dAaaAAbbBBcccCC';
$procurar = 'a';

$pos = stripos($string, $procurar);

if ($pos === false) {
	echo "A string $procurar não foi encontrada;";
} else {
	echo "A string $procurar foi encontrada na posição $pos";
}

echo "<hr>";

$string = "0123456789";

$subString = substr($string, 5, -2);

echo $subString;

echo "<hr>";

$string = 'hoje acordei muito cedo.';
echo  str_replace('cedo', 'tarde', $string);
echo '<br>';
echo substr_replace($string, 'tarde', -5,-1);
echo '<br>';
echo substr_replace($string, 'tarde', 5);

echo "<hr>";

$string = 'hoje acordei muito cedo.';

echo strtoupper($string);

echo "<hr>";

$string = "HOJE ACORDEI MUITO CEDO.";

echo strtolower($string);

echo "<hr>";

echo ucwords(strtolower($string));