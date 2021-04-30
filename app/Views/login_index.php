
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<meta name="description" content=""/>
		<meta name="author" content=""/>

		<link rel="shortcut icon" href="https://www.avancarrentals.com/desenv/imagens/icon/icon_avancar.png" type="image/x-icon" />

		<title>PROJETO MOE</title>
		
		<link rel="stylesheet" href="../css/normalize.css"/>
		
        <link rel="stylesheet" href="../css/demo.css"/>
        <!-- Pushy CSS -->
        <link rel="stylesheet" href="../css/pushy.css"/>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
		
		<style>
			.modal-dialog { max-width: 80%; }
			body {font-size: 13px; }
		
			/* width */
			::-webkit-scrollbar {
			  width: 4px;
			  background: white;
			}

			/* Track */
			::-webkit-scrollbar-track {
			  box-shadow: inset 0 0 5px grey; 
			  border-radius: 10px;
			}
			 
			/* Handle */
			::-webkit-scrollbar-thumb {
			  background: black; 
			  border-radius: 10px;
			}
			
			#container {
				padding-top: 10px;
				padding-left: 10px;
				padding-right: 10px;
				padding-bottom: 10px;
				margin-bottom: 80px;
				margin-left: 294.501;
				margin-right: 294.501;
				margin-top: 81px;
			}
			
			/* Handle on hover */
			::-webkit-scrollbar-thumb:hover {
			  background: gray; 
			}
		</style>
	</head>
	
	<body>
        <!-- Your Content -->
        <div class="container mt-5" >
			<div class="form-row justify-content-md-center ">
				<div class="col-md-9 mt-5">
					<br>
									</div>
			</div>
			<div class="row justify-content-md-center" >
				<div class="col-md-4" style=" margin-left: auto; background-color: black; margin-right: auto; background-color:white; border-radius:4px;">
					<form class="needs-validation" autocomplete="off" method="post"  action="Aux_Login/Aux_Verifica_Login.php" enctype="multipart/form-data" novalidate>
						<div class="form-row justify-content-md-center" >
							<img class="col-md-10 mb-2" style="border-radius:4px; background-color: #F8842D;" src="http://localhost/MOE/public/img/logo.png" alt="" height="200">
						</div>
						<div class="form-row justify-content-md-center ">
							<div class="mx-auto mb-2">
								<h1 class="h4 mb-2 font-weight-normal">Por favor, faça o login:</h1>
							</div>
						</div>
						<div class="form-row"> 
							<div class="col-md-12 mb-1">
								<input type="email" class="form-control" id="email" placeholder="Email" name="informe seu login" title="Email" required autofocus>
								<!-- <div class="invalid-feedback">
									Por Favor, Informe o e-mail!
								</div> -->
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12 mb-1">
								<input type="password" class="form-control" id="inputPassword" placeholder="informe sua senha" name="inputPassword" title="Password" required >
								<!-- <div class="invalid-feedback">
									Por Favor, Informe a senha!
								</div> -->
							</div>
						</div>
						<div class="form-row justify-content-md-center">
							<div class="col-md-12">
								<input type="hidden" class="form-control" id="verifica" name="verifica" value="verificar">
								<button class="btn btn-outline-success btn-block">Entrar</button>
							</div>
						</div>
					</form>
					<div class="form-row justify-content-md-around mt-1">
						<button class="btn btn-sm btn-outline-primary col-md-5 mr-1" id="btn_fazer_cad" >Criar Conta</button>
		
					</div>
					<div class="form-row justify-content-md-center">
						<footer class="text-secondary text-center m-1 p-1 d-print-none">Projeto MOE&#174; &sdot; Todos os Direitos Reservados</footer>
					</div>
				</div>
			</div>
        </div>
		
        <!-- Pushy JS -->
        <script src="../js/pushy.min.js"></script>
		
		<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
		
		<script>
			$( "#btn_home" ).click(function() {
				window.location.href = "../index.php";
			});
			$( "#btn_fazer_cad" ).click(function() {
				window.location.href = "Aux_Usuario_Cad.php";
			});
			$( "#btn_esqueci_senha" ).click(function() {
				window.location.href = "Aux_Solicitar_Recuperar_Senha.php";
			});
			setInterval(function(){ location.reload(); }, 2400001);
		</script>
		
		<script>
			// java script que faz validação dos campos do formulário
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
		<script>
			$(document).ready(function() {
				setTimeout(function() {
					$(".alert").hide();
				}, 10500);
			})
		</script>
	</body>
</html>