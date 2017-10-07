<?php 

echo "<pre>";

for ($i=0; $i <= 10 ; $i++) { 
	
	echo $i;
	echo "<br>";
	if ($i == 5) {
		break;
	}
}

echo "<hr>";


for ($i=0; $i <= 10 ; $i++) { 
	echo $i;
	echo "<br>";
	if ($i == 5) {
		continue;
	}
	echo $i;
	echo "<br>";
}