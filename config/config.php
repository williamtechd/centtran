<?php

	// Configurações
	function url($path = null){
	    if(isset($_SERVER['HTTPS'])){
	        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
	    }
	    else{
	        $protocol = 'http';
	    }
	    if(  $_SERVER['HTTP_HOST']  == 'localhost'):
		    return $protocol . "://" . $_SERVER['HTTP_HOST'] . '/centtran/' .$path;
		else:
			return $protocol . "://" . $_SERVER['HTTP_HOST'] . '/' .$path;
		endif;
	}

 	/*
	// CURSO 
	echo "<pre>";

	$json = file_get_contents('config/cursos/cursos.json');
	$data  = json_decode($json);
 	
 	echo "====================== ORIGINAL ============================ <br>";
	print_r($data);	
	echo "<hr>";

	echo "====================== REMOVE O ATUAL ============================ <br>";	
	unset($data->cursos->$name);
	print_r($data);
	echo "<hr>";
	
	echo "====================== ADICIONA UM NOVO ============================ <br>";	
	$data->cursos->$name->title = 'Curso de Amb';
	$data->cursos->$name->description = '123091239812903812';
	print_r($data);
	echo "<hr>";

	echo "====================== TRANSFORMA EM JSON ============================ <br>";	
	$data = json_encode($data);
	print_r($data);
	echo "</pre>";

	echo "====================== ATUALIZA O ARQUIVO ============================ <br>";	
	//file_put_contents('config/cursos/cursos.json', $data); 
 	*/
	 

	
 

	 