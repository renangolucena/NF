<?php include'verifica.php';?>


<?php
    
    $nf = $_SESSION['nf'];
    $id_prod = $_POST['produto_opcao'];
    $qtde_prod = $_POST['qtde'];

    $consulta = "SELECT preco, nome FROM produtos WHERE id='$id_prod'";
    $consulta = $conexao->query($consulta);
    $linha = $consulta->fetch_assoc();
    $preco = $linha['preco'];
    $nome = $linha['nome'];

    
    $subtotal = $preco * $qtde_prod;

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
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
						<img src="images/tomioka.png">
					</div>
					<span class="login100-form-title p-b-34 p-t-27">
					Ara Ara, É Hora De Comprar! 
					</span>
			
			 
			  
					<form action="insere_item_nf.php" method="post">
			  <div class="form-row" style="display: flex; justify-content: center; color: #f5f5f5;">
			    <div class="col-md-4 mb-3">
			      <label for="validationServer01">ID Produto</label>
			      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="ID"  required name="id_prod" value="<?php echo $id_prod; ?>" readonly="readonly">
			    </div>

			    <div class="col-md-4 mb-3">
			      <label for="validationServer02">Produto</label>
			      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Produto"required name="nome_prod" value="<?php echo $nome; ?>" readonly="readonly">
			    </div>

			  <div class="form-row" style="display: flex; justify-content: center;">
			    <div class="col-md-3 mb-3">
			      <label for="validationServer03">Valor Unitário</label>
			      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Valor Unit." required name="valor_unit" value="<?php echo $preco; ?>" readonly="readonly">
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationServer04">Quantidade</label>
			      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Qntd" required name="qtde" value="<?php echo $qtde_prod; ?>" readonly="readonly">
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationServer05">Subtotal</label>
			      <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Subtotal" required name="subtotal" value="<?php echo $subtotal; ?>" readonly="readonly">
			    </div>
			  </div>
			  <div style="display: flex; justify-content: center;">
			 <button class="login100-form-btn" style="margin: 0px;">
				Avançar
			</button>
			</div>	
			</form>

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
