<?php
	include '../conecta.php';
	session_start();

	 $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

    $query = "SELECT COUNT(*) AS total FROM user WHERE usuario = '$usuario'";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] == 1) {
        $_SESSION['user_existing'] = true;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = mysqli_real_escape_string($conexao, trim($_POST['senha']));
        header('location: cadastro.php');
        exit;
    }

	$consulta = $conexao -> prepare("INSERT INTO user(usuario,senha)
	VALUES ('$usuario','$senha')");
	$consulta -> execute();

	header('Location: ../login/login.php');
?>