<?php

$bool = true;
$bool2 = false;

$integerDecimal = 10;

$intgerOctal =  0666;

$integerHexadecimal = 0x123;

$floatDecimal = 10.10;
$floatExponencial = 2E7;

$string = "Text";

//----------------------------------------------
// Exemplo apostila

$v_ou_f = true ;
$inteiro = 10;
$flutuante = 5.22;
$string = " Testando " ;
$array = array ( 'a ' , 'b ' , 'c ') ;
$objeto = new Objeto ;
$recurso = fopen ( ' arquivo ' , 'r ') ;
$null = NULL ;


//----------------------------------------------
/*
	Pseudo-tipos

	Durante a leitura desta apostila, exercícios em aula e até mesmo pesquisas na inter-
	net, você encontrará vários menções a alguns tipos de variáveis conhecidos como
	pseudo-tipos. Eles são utilizados como referências a situações específicas que ocor-
	rem durante o desenvolvimento de uma aplicação.

	mixed

	O tipo mixed é utilizado para indicar que uma função pode esperar ou retornar mais
	de um tipo de variável ao mesmo tempo. Por exemplo, uma função pode retornar
	uma string ou um booleano, enquanto pode receber como parâmetro um array ou
	string.

	number

	O tipo number é utilizado para indicar que a variável pode ser um inteiro ou um
	float.

	callback
	
	Algumas funções no PHP podem esperar como parâmetro uma outra função definida
	pelo usuário. Chamamos essas funções passadas como parâmetro de callbacks.
*/
