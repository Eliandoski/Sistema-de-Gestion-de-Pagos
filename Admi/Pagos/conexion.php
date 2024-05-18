<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'registro_pagos');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>