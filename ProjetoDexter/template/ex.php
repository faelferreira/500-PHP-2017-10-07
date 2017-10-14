foreach ($paginas as $pagina) {
	
	
	echo $pagina['url'] . ' - ' . $pagina['label'];
	echo "<br>";
	
	echo '<li> <a href="' . $pagina['url'] . '">' . $pagina['label'] . '</a></li>';
	
	//<li> <a href="$pagina['url']">$pagina['label']</a></li>
	
	
 }