<?php

	$host= "localhost";
	$usuario= "root";
	$senha= "";
	$banco= "loja";

	$conexao= new MYSQLI("$host", "$usuario","$senha", "$banco");

	if($conexao -> connect_error) {
		echo "Erro De Conexão";
		
	}

	else{
		//ech "Conectando Ao Banco De Dados: loja <br>";
	}

	