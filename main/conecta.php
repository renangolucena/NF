<?php

	$host= "localhost";
	$usuario= "root";
	$senha= "";
	$banco= "loja";

	$conexao= new MySQLi("$host", "$usuario","$senha", "$banco");

	if ($conexao -> connect_error) {
		echo "Erro De Conexão";
	}

	else{
		// "Conectando Ao Banco De Dados: loja <br>";
	}

	