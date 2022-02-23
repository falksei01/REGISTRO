## Welcome to GitHub Pages

You can use the [editor on GitHub](https://github.com/falksei01/REGISTRO/edit/main/README.md) to maintain and preview the content for your website in Markdown files.

Whenever you commit to this repository, GitHub Pages will run [Jekyll](https://jekyllrb.com/) to rebuild the pages in your site, from the content in your Markdown files.

### Markdown

Markdown is a lightweight and easy-to-use syntax for styling your writing. It includes conventions for

<?php
include('conexion.php');
?>

  <?php
		if (isset($_POST['registrarse']))
		{
			
			if (!empty($_POST['usuario']))
			{
			
				mysqli_query($cnx, "INSERT into registro values
		('$_POST[usuario]',
		'$_POST[correo]',
		'$_POST[password]')");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registarse</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
	<form method="post" action="">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
             
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Crear Cuenta
                        <img src="/sesion/images/icono.png">
                        					</span>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Nombre Del Usuario:
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="usuario" id="usuario" value="<?php if (isset($_POST['buscar'])) echo $campo['usuario'];?>">
						<span class="focus-input100"></span>
					</div>
                    <div class="p-t-31 p-b-9">
						<span class="txt1">
							Correo Electronico:
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="correo" id="correo" value="<?php if (isset($_POST['buscar'])) echo $campo['correo'];?>">
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Contraseña:
                            </div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password"  value="<?php if (isset($_POST['buscar'])) echo $campo['password'];?>">
						<span class="focus-input100"></span>
					</div>
						</span>
                       

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="registrarse" id="registrarse">
							Registrarse
						</button>
					</div>
                    <div class="w-full text-center p-t-55">
						<span class="txt2">
							Ya te Registrarste?
						</span>

						<a href="entrar.php" class="txt2 bo1">
							Inicia sesion ahora 
						</a>
					</div>
			</form>
				</form>
               
                </>
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
