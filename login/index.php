<?php
require_once("./php/myDBC.php");
if(isset($_SESSION['session']))
{
	header("location:principal.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>dos</title>
	<title>Trabajo en equipo</title>

	<meta charset="utf-8">
	<link type="text/css" href="./css/style.css" rel="stylesheet" />
</head>

<body>
	
	<div id="registrar">
          	<a href="./php/registro.php"</a>Anotarte</a>
          	<a href="./php/registro.php"</a>ENTRAR</a>
    </div> <!-- fin opcion-->
    
	<div id="envoltura">
		<div id="contenedor">
	
			<div id="cabecera" >
				<img src="./css/images/logo.gif">
			</div>
	
			<div id="cuerpo">
				<form id="form-login" action="./php/login.php" method="post" autocomplete="off">

					<p><label >MIEMBRO:</label></p>
						<input name="usuario" type="text" id="usuario" placeholder="Ingresa Usuario" autofocus="" required=""></p>
					
					<p><label>PIN:</label></p>
					<!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
					<p><label >proyecto de sistemas:</label></p>
						<input name="usuario" type="text" id="usuario" placeholder="Ingresa Usuario" autofocus="" required=""></p>
					
					<p><label>clave encriptada</label></p>
						<input name="contrasenia" type="password" id="contrasenia" placeholder="Ingresa Password" required=""></p>
					
					<p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
				</form>
			</div><!--fin cuerpo-->

			<div id="pie">INFTEC</div>
			<div id="pie">formar parte</div>

		</div><!-- fin contenedor -->

	</div><!--fin envoltura-->
	
</body>

</html>
