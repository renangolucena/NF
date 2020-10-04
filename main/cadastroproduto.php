<?php
	
	include'verifica.php';
	include'conecta.php';

	$prod= $_POST['prod'];
	$preco= $_POST['preco'];
	
	$consulta= $conexao->prepare("INSERT INTO produtos(nome, preco) VALUES ('$prod', '$preco')");

	$consulta->execute();

	header("location: cadastroprod.php");


