<?php include'verifica.php';?>

<?php
    $data_atual = $_POST['data'];
    //echo "$data_atual";
    $consulta = $conexao -> prepare("
        INSERT INTO nota_fiscal (data)
        VALUES ('$data_atual')
        ");
    $consulta -> execute();
    header('Location: seleciona_ultima_nf.php');
?>