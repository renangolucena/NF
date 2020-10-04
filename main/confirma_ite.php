<?php include'verifica.php';?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
    echo "<br><hr>";
    session_start();
    $nf = $_SESSION['nf'];
    
    $consulta = "SELECT * FROM itens WHERE numnf = '$nf'";

    echo "<h1>NF: ".$nf . "</h1><br><hr>";
    $total = 0;
    foreach ($conexao -> query($consulta) as $linha) {

        echo "Cod Produto: ".$linha['codproduto'] ."<br>";
        //echo "Nome Produto: ".$linha['idade'] ."<br>";
        echo "Qtde: ".$linha['qtde'] ."<br>";
        echo "Subtotal: ".$linha['subtotal'] ."<br>";
        $total = $total + $linha['subtotal'];
        echo "<hr>";
    }

    echo "<b>TOTAL DA NOTA R$ ".$total."</b><hr>";
    ?>

    <p>O QUE DESEJA FAZER?</p>
    <p><a href="seleciona_ultima_nf.php">INSERIR OUTRO PRODUTO</a></p>
    <p><a href="finalizar.php?total=<?php echo $total; ?>">FINALIZAR NOTA FISCAL</a>   </p>   
    

</body>
</html>