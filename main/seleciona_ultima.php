<?php include'verifica.php';?>

<?php
   
  
    $consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
    $consulta = $conexao->query($consulta);
    $linha = $consulta->fetch_assoc();
    $ultimo = $linha['ultima'];
    session_start();
    $_SESSION['nf'] = $ultimo;
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
			<form class="needs-validation" novalidate>

			  <div class="form-row">
			    <div class="col-md-6 mb-3">
			      <label for="validationCustom03" style="color: white;">NF</label>
			      <input type="text" name="nf" value="<?php echo $ultimo;?>"class="form-control" id="validationCustom03" placeholder="City" required>
			      <div class="invalid-feedback">
			        Please provide a valid city.
			      </div>
                </div>
                </div>
               
                <div class="form-row">
			    <div class="col-md-3 mb-3">
			      <label for="validationCustom05" style="color: white;">Produtos</label>
			      <select name="produto_opcao" type="text" class="form-control form-control-lg" id="validationCustom05" placeholder="Zip" required>
			      <option value="">Selecione Um Item</option>
			      <?php
                	$consulta = "SELECT * FROM produtos";
                	foreach ($conexao -> query($consulta) as $linha) {
           		 	?>
                    <option value="<?php echo $linha['id'];?>"><?php echo $linha['nome'];?></option>
        
            	<?php 
                	}
           		 ?>
           		 
			      </select>
			      <div class="invalid-feedback">
			        Please provide a valid zip.
			      </div>
			    </div>
			     <div class="col-md-3 mb-3">
			      <label for="validationCustom04" style="color: white;">Quantidade</label>
			      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
			      <div class="invalid-feedback">
			        Please provide a valid state.
			      </div>
			    </div>
			  </div>
			 
			 <button class="login100-form-btn">
				Criar Nota Fiscal
			</button>
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
