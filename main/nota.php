<?php include'verifica.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
			<div class="log">
			<div class="limiter">
				<div class="container-login100" style="background-image: url('images/bgg.jpg');">
					<div class="log">
					<div class="wrap-login1000">
					</div>
							<div class="naruto">

								<img src="images/ikki.png">
							</div>

							<span class="login100-form-title p-b-34 p-t-27">
							Eu Sou Ikki De Fenix, Essas São Suas Notas Fiscais, 
							<p><span class="login100-form-title p-b-34 p-t-27">Pode Observa-las O Quanto Quiser</span></p>
							</span>

							
							<?php
									$consulta = "SELECT * FROM nota_fiscal";

								    foreach ($conexao -> query ($consulta) as $linha) {
								        echo "NF: ".$linha['nf'];
								        echo "Data: ".$linha['data'];
								        echo "Valor Total R$ :".$linha['valor_total'];

		        				?>

		        				<table class="table table-striped" style="opacity: 90%; background-color: white;">
		        					 <thead>
				                    <tr>
				                        <th scope="col">#</th>
				                        <th scope="col">cod produto</th>
				                        <th scope="col">produto</th>
				                        <th scope="col">preço</th>
				                        <th scope="col">quantidade</th>
				                        <th scope="col">subtotal</th>

				                    </tr>
				                </thead>
				                <tbody>
				                    <?php
				                       	
				                       	$nota = $linha['nf'];
        								$consulta2 = "SELECT * FROM itens WHERE numnf = '$nota'";
				                        foreach ($conexao -> query($consulta2) as $lineResult) {

				                        	?>

				                        	<tr>
				                        	  <th scope="row"><?php echo $lineResult['id']; ?></th>
				                        	  <td><?php echo $lineResult['codproduto']; ?></td>

				                        	<?php
					                        $iditem= $lineResult['id'];
					                        $codproduto= $lineResult['codproduto'];
					                        $consulta3 = "SELECT * FROM produtos WHERE id = '$codproduto'";
            								
            								foreach ($conexao -> query($consulta3) as $linha3) {


            						?>

            								<td><?php echo $linha3['nome']; ?></td>
            								<td><?php echo $linha3['preco']; ?></td>
            								<?php

            								}

	

				                    ?>

				                 
				                                <td><?php echo $lineResult['qtde']; ?></td>
				                                <td><?php echo $lineResult['subtotal'];?></td>
				                            </tr>

				                        <?php
				                        	}
				                            }
				                        ?>
				                </tbody>
				            </table>
							
						</div>				
					</div>
				</div>
			</div>
			


		<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>