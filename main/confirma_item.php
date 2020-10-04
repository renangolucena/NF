<?php include'verifica.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Confirmação</title>
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
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bgg.jpg');">
			<div class="wrap-login100">
					<div class="naruto">
						<img src="images/yui.gif">
					</div>
					<span class="login100-form-title p-b-34 p-t-27">
						Yahallo! O Que Deseja Fazer Agora?
					  					</span>
					<?php
						include 'conecta.php';
					    $nf = $_SESSION['nf'];
					    
					    $consulta = "SELECT * FROM itens WHERE numnf = '$nf'";
					    $total = 0;

					    	 foreach ($conexao -> query($consulta) as $linha) {

					    	 	$total = $total + $linha['subtotal'];
					   
					   		 } 

					    ?>
					    <div style="color: #f5f5f5; margin-bottom: 3px;">
					    <h1><?php echo $nf; ?> - Total: R$ <?php echo $total; ?></h1>
						</div>
					<table class="table" style="color: #f5f5f5">

					 <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Produto</th>
					      <th scope="col">Quantidade</th>  
					      <th scope="col">Preço</th>
					      <th scope="col">Subtotal</th>
					    </tr>
					  </thead>
					  <tbody>

					    <?php
					    	
					    	foreach ($conexao -> query($consulta) as $linha) {

					    		$consulta2 = "SELECT * FROM produtos WHERE id='$linha[codproduto]'";

					    		$consulta2 = $conexao -> query($consulta2);

					    		$linha2= $consulta2 -> fetch_assoc(); 
					    		$nomeproduto= $linha2['nome'];

					    
					    ?>
					    	<tr>
					      	<th scope="row"><?php echo $linha['codproduto']; ?></th>
					      	<td><?php echo $nomeproduto; ?></td>
					      	<td><?php echo $linha['qtde']; ?></td>
					      	<td><?php echo $linha2['preco']; ?></td>
					      	<td><?php echo $linha['subtotal']; ?></td>
					    	</tr>
						<?php } ?>
					    
					  </tbody>
					</table>
			
			 
			  
					
			  
			<div style="display: flex; justify-content: center; padding: 10px;">
			 <button class="login100-form-btn" style="margin: 0px;">
				<a href="finalizar.php?total=<?php echo $total;?>">Finalizar</a>
			</button>
			</div>	
			 
			 <div style="display: flex; justify-content: center;">
			 <button class="login100-form-btn" style="margin: 0px;">
				<a href="seleciona_ultima_nf.php">Continuar Comprando</a>
			</button>
			</div>	 

			<script>
			// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function() {
			  'use strict';
			  window.addEventListener('load', function() {
			    // Fetch all the forms we want to apply custom Bootstrap validation styles to
			    var forms = document.getElementsByClassName('needs-validation');
			    // Loop over them and prevent submission
			    var validation = Array.prototype.filter.call(forms, function(form) {
			      form.addEventListener('submit', function(event) {
			        if (form.checkValidity() === false) {
			          event.preventDefault();
			          event.stopPropagation();
			        }
			        form.classList.add('was-validated');
			      }, false);
			    });
			  }, false);
			})();
			</script>
								

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
