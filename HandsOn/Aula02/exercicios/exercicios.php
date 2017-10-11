<!DOCTYPE html>
<html>
<head>
	<title>Exercicios</title>
</head>
<body>

<pre>

<p>Montar uma estrutura que monte um array com números aleatórios entre 0 e 10. Para gerar o número aleatório é utilizado a função mt_rand(0,10).
</p>
<code>
	//Gerando número aleatório entre 0 e 10;
	$numero = mt_rand(0,10);
</code>
<p>Neste exercício vamos definir uma váriavel que vai ser o tamanho de nosso array e criar um laço de repetição para inserir os números aletórios dentro.
</p>
<p>Após nosso array montado, vamos montar uma estrutura de código que mostre:</p>
<ul>
	<li>todos os números, separados por vírgula;</li>
	<li>O primeiro número do array;</li>
	<li>O último número do array;</li>
	<li>apenas os números pares, separados por vírgula;</li>
	<li>apenas os números ímpares, separados por vírgula;</li>
	<li>O maior número;</li>
	<li>O menor número;</li>
	<li>Array em ordem crescente;</li>
	<li>Array em ordem decrescente;</li>
</ul>
<p>Para ordenação dos arrays é utilizado um for dentro de outro.</p>
<p>Para conseguirmos iterar sempre um número e seu próximo.</p>
<p>Após isso, comparamos se o número é maior que seu próximo.</p>
<p>Caso seja:</p>
<ul>
	<li>armazenamos este valor em uma váriavel temporária;</li>
	<li>pegamos o valor do próximo e colocamos na posição do número;</li>
	<li>e colocamos o temporário na posição do próximo;</li>
</ul>
<p>Sei que é meio confuso, mas vou tentar exemplificar com código;</p>
<code>
// se x[0] > x[1], queremos trocar os dois de posição, pois o número maior sempre vai pro final;<br>
SE x[0] > x[1]<br> 
	temp = x[0]; // Pegando o valor maior e guardando temporariamente<br>
	x[0] = x[1]; // Colocando o valor menor na posição menor<br>
	x[1] = temp; // Voltando o valor maior para a posição maior<br>
</code>

<p>Fazendo isso dentro do laço de repetição, nós conseguimos ordenar nosso array, tanto de forma crescente como decrescente;</p>
* 	Sem utilizar as funções de arrays.<br>
** 	Deve ser feito as soluções utilizando for e foreach. <br>
***	A ordenação pode ser feita utilizando for OU foreach. <br>
















</pre>
</body>
</html>