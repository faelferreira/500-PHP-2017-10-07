<?php 

$nome = ' João ';
echo " $nome e Maria andam pela rua <br/> " ; // João e Maria andam pela rua 
echo ' $nome e Maria andam pela rua '; //João e Maria andam pela rua 

//----------------------------------------------------------------------------

// Caracteres de escape

/*

Quebra de linha : \ n
Tabulação : \ t
Retorno do carro : \ r
A própria barra : \\
Aspas simples : \ ’
Aspas duplas : \ "

*/

echo " <pre> Vou quebrar a linha \n " ;
echo "\tEstou tabulado \n " ;
echo " Mostrar aspas duplas , sem quebrar o código \" \n " ;
echo " Mostrar a barra \\ " ;
echo " </pre> " ;


/*

Navegadores, por padrão, não exibem caracteres de escape. Novas linhas e tabula-
ções que forem colocadas em strings só serão exibidas em texto puro, isto é, caso
você salve a string em um arquivo de texto. Para mostrar caracteres de escape no
navegador, é comum utilizar a tag HTML <pre>.

*/