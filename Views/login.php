<!DOCTYPE html>
<html>
<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');


include(VIEWS_PATH . "header.php");
?>

<body style="background-color: #708D81">
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../img/LOGO_2.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<?php 
				if (isset($_GET["info"])) {
					if ($_GET["info"] == 1) {
				?>
						<div class="alert alert-danger d-flex alert-dismissible fade show" role="alert">
							<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
								<use xlink:href="#exclamation-triangle-fill" />
							</svg>
							<strong>¡Datos Incorrectos!</strong>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					<?php
					}
					if ($_GET["info"] == 2) {
					?>
						<div class="alert alert-info alert-dismissible fade show" role="alert">
							<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
								<use xlink:href="#info-fill" />
							</svg>
							<strong>¡Cerró Sesión!</strong> Adiós
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
				<?php
					}
				}
				?>
				<div class="d-flex justify-content-center form_container">
					<form role="form" action="<?php echo CONTROLLER_PATH; ?>valida_login.php" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text" style="background-color: #8D0801"><img src="../img/gamer.png" width="50px" style="border-radius: 100%;"></span>
							</div>
							<input type="text" name="usuario" class="form-control my-input" id="usuario" placeholder="Nombre de Usuario">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text" style="background-color: #8D0801"><img src="../img/key.png" width="50px" style="border-radius: 100%;"></span>
							</div>
							<input type="text" name="contraseña" class="form-control my-input" id="contraseña" placeholder="Contraseña">
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button style="background-color: #001427" type="submit" name="button" class="btn login_btn">Iniciar Sesión</button>
						</div>
					</form>
				</div>

				<div class="mt-4">
					<div class="d-flex justify-content-center links" style="-webkit-text-stroke: 0px grey; color: white;">
						¿No tienes una cuenta? <a href="../Views/signin.php" class="ml-2">Regístrate</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">¿Olvidaste tu contraseña?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<?php
include(VIEWS_PATH . "footer.php");
?>

</html>