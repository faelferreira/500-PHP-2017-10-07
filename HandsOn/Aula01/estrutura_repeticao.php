<?php 

echo "<pre>";

// WHILE

$x = 0;
while ( $x <= 10) {

	echo $x;
	echo "<br>";

	$x++;
}

echo "<hr>";

// DO WHILE

$y = 0;
do{
	echo $y;
	echo "<br>";

	$y++;
}while ($y <= 10);


echo "<hr>";

// FOR

for ($i=0; $i <= 10 ; $i++) { 
	echo $i;
	echo "<br>";
}