<?php
	
	$dbHost = 'Localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'formulario_pi';
	
	$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
	
	if($conexao->connect_errno)
	{
		echo "erro";
	}
	else
	{
		echo "Sem erro";
	}

?>