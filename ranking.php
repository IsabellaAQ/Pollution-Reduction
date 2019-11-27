<?php 
$servername = "localhost";
  $database = "pr";
  $username = "root";
  $password = "";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos.css">
		<title>Ranking</title>
		<link rel="icon" type="image/png" href="imagenes/Logo2.0.png"/>
		<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0,minimun-scale=1.0,maximun-scale=1.0">
</head>
<body bgcolor= #F2F2F2>
	<nav class="menu">
			<ul>
				<li><a href="registro_emisiones.php"><img src="imagenes/emision.png" alt="registro_emisiones" ></a></li>
				<li><a href="medios_transporte.html"><img src="imagenes/trans.png" alt="medios_transporte" ></a></li>
				<li><a href="ranking.php"><img src="imagenes/ranking.png" alt="ranking" ></a></li>
				<li><a href="calidad_aire.html"><img src="imagenes/aire.png" alt="calidad_aire" ></a></li>
				<li><a href="geolocalizacion.html"><img src="imagenes/location.png" alt="geolocalizacion" ></a></li>
				<li><a href="tips.html"><img src="imagenes/tipsicon.png" alt="tips" ></a></li>
			</ul>
		</nav>
		<div id="ContSuperior">
				<header>      <!--encabezado-->
						<div id="Logotipo">   
							<img src="Imagenes/Logo1.0.png" alt="Practica1"></a>
						</div>
						<div id="botones">
							<a href="perfil.html"/><img src="Imagenes/usuario.png" alt="Practica1"></a>   
							<a href="ajustes.html"/><img src="Imagenes/Ajustes.png" alt="Practica1"></a>
						</div>
				</header>
		</div>
		<div id="elements"  align= "center">
		    <table id="datos"  align= "center" >
		        <img src="Imagenes/rankingcup.png" alt="Practica1">
		            <tr>
		            	<!--Determina el nombre de las columnas-->
		            	<th bgcolor= #49c485  style="width: 400px" >Usuario</th>
		                <th bgcolor=#49c485  style="width: 400px">Nombre</th>
		                <th bgcolor=#49c485 style="width: 400px">Apellido</th>
		                <th> </th>
		            </tr>
		        <?php 
				$sql="SELECT * from usuarios";
		$result=mysqli_query($conn,$sql); 

		while($mostrar=mysqli_fetch_array($result)){ //ciclo para mostrar los datos almacenados en la bd
		 ?>

		<tr align= "center">
			<td><?php echo $mostrar['usuario'] ?></td> <!--mostrar los datos de la bd-->
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
		</tr>
	<?php 
	}
	 ?>
		    </table>
		</div> <br><br><br><br><br><br>
</body>
</html>