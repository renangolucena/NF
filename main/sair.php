<?php include'verifica.php';?>


<?php
    session_start();
    unset(
        $_SESSION['Id'],
        $_SESSION['Usuario'],
        $_SESSION['Senha']
    );
    header('Location: ../index.html');
?>