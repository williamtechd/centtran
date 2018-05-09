<?php 	

	$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
	$url = array_filter( explode('/', $url) );
	
	$file = $url[0].'.php';
	$name = $url[0];

	if(
		$name == 'curso-de-motorista-de-ambulancia' || 
		$name == 'curso-mopp' || 
		$name == 'curso-de-transporte-escolar' || 
		$name == 'curso-de-transporte-coletivo'	||
		$name == 'curso-de-taxisita' || 
		$name == 'curso-de-mobilidade-reduzida' || 
		$name == 'curso-para-renovacao-de-cnh' || 
		$name == 'curso-de-reciclagem-de-cnh'){
		
		include 'cursos.php';

	}elseif( is_file($file)){
		
		include $file;
	
	}else{
	
		include '404.php';
	
	}

?>