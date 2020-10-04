<?php
	session_start();

	if (empty($_POST['Usuario']) || empty($_POST['Senha'])){
    header('location: login.php'); 
    exit();
}
	include '../conecta.php';
	$usuario = mysqli_real_escape_string($conexao, $_POST['Usuario']);
	$senha = mysqli_real_escape_string($conexao, $_POST['Senha']);

	$consulta = "SELECT usuario, Id FROM user WHERE usuario = '{$usuario}' AND senha = '{$senha}'";
	$resultado = $conexao->query($consulta);

	$registros = mysqli_num_rows($resultado);
	
	if ($registros == 1) {
		$resultado_usuario = mysqli_fetch_assoc($resultado);
		$_SESSION['Id'] = $resultado_usuario['Id'];
		$_SESSION['Usuario'] = $resultado_usuario['usuario'];
		header('Location: ../main/index.php');
	} else {
		header('Location: login.php');
		exit();
	}
?>