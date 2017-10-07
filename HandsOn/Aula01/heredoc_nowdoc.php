<?php 

$certi = "Zend";

$curso = <<< TEXTO

Estou me preparando para a certificação $certi na 4Linux;

TEXTO;

echo $curso;

echo "<hr>";

$curso = <<< 'TEXTO'

Estou me preparando para a certificação $certi na 4Linux;

TEXTO;

echo $curso;