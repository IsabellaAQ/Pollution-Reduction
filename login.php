<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos.css">
		<title>Login</title>
		<link rel="icon" type="image/png" href="imagenes/Logo2.0.png"/>
		<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0,minimun-scale=1.0,maximun-scale=1.0">
</head>
<body bgcolor=#49c485>
	<div id="login">
	 	<img src="imagenes/login.png" alt="Login" >
	 	<!--formulario para que el usuario ingrese con su "usuario" y "password" el completar los datos se validan los campos y se redirige al archivo php correspondiente para validar los datos, cabe aclarar que el login aún no funciona carrectamente-->
	 	<form  action="db/log.php" method="post">
		 	<div id="input_login">

		 		<input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario" onclick='this.value=""' minlength="3" required><br>
				<input type="password" id="claveL" name="password"  placeholder="Contraseña" minlength="6"><br>
				<input type="submit" id="buscar" value="Aceptar"><br>
				<a href="ingreso.php"><input type="button" value="Cancelar"></a><br>
				<div id="btn_registro">
					<a href="registro.php"><input type="button" name="registro" value="Registrarse"></a>
				</div>
		 	</div>
		</form>
 	</div>
</body>
</html>