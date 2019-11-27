<?php 
$servername = "localhost";
  $database = "pr";
  $username = "root";
  $password = "";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);
?>
<!DOCTYPE>
<html>
	<head> 
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<title>Registro de emisiones</title>
		<link rel="icon" type="image/png" href="imagenes/Logo2.0.png"/>
		<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0,minimun-scale=1.0,maximun-scale=1.0">
		<style type="text/css">
  			#circulo {
     width: 400px;
     height: 400px;
     -moz-border-radius: 50%;
     -webkit-border-radius: 50%;
     border-radius: 50%;
     background: #DBE8F7;
     margin: auto;
     display: block;
     font-family: arial;
     font-size: 20px;
}
#Interior{
	float: left;
	margin: 0px; 
	margin-bottom: 10px;
	text-align: center;
	padding: 0;
	width:100%;
	height: 200px;
	background-color: #E6E6E6;


}
  		</style>
    </head>
    <body bgcolor=#74edaf>
	
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
							<a href="agregar_vehiculo.html"/><img src="Imagenes/agregar.png" alt="Practica1"></a>
						</div>
				</header>
				
			    <section id="contendordos" style="background: #49c485 ">
			    	<br><br><br>
			    	<div id="emsiones">
			    		<div id="circulo">
			    			<br><br><br><br><br>
			    			<p style="font-size: 30px;">Emisión del día</p> <br><br><br><br>
			    			<?php 
								$sql="SELECT emision from emisiones";
								$result=mysqli_query($conn,$sql); 

								while($mostrar=mysqli_fetch_array($result)){ //ciclo para mostrar los datos almacenados en la bd
						 		?>

								<tr align= "center">
									<td><?php echo $mostrar['emision'] ?></td> <!--mostrar los datos de la bd-->
								</tr>
							<?php 
							}
					 		?>
			    		</div>
			    	</div>
			    </section>	
				<div id="Interior">
					<br>
					<div id="registroe">
					<br>	
						<a href="http://localhost/PR/graficos.php">Registro de emisiones</a>
						<!--enviar a la grafica-->
					</div>
				</div>
		</div>
    </body>
</html>      