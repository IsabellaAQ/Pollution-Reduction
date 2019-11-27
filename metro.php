<!DOCTYPE >
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet"  href="css/estilos.css">
		<link rel="stylesheet"  href="css/jquery.excoloSlider.css">
		<link rel="stylesheet"  href="css/estilosJMRS.css">
		<link rel="icon" type="image/png" href="imagenes/Logo2.0.png"/>
		<style type="text/css">
			form a input{
				width: 200px;
				height: 50px;
				text-align: center;
				margin: auto;
				display: block;
				background: #49c485;
				border-radius: 5px;
				color: white;
				font-family: arial;
			}
		</style>
		<link rel="stylesheet"  href="css/estilos.css">
		<title>Metro</title>
	</head>
	<body>
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
				<div id="metro2">
						<a href="medios_transporte.html"><img src="imagenes/metro2.png"></a>
						<article id="metro2">
							<h1>Metro</h1>
							<h3>Medio de transporte que utiliza tecnologías límpias<br>
								y eléctricas para trenes, cables y tranvía <br>
								el uso del transporte público reduce el uso de combustibles.</h3>
							<form action="db/metro.php" method="post">
								<a href="medios_transporte.html"><input type="submit" value="Seleccionar"></a>
							</form>
						</article>
				</div>
						
	</body>
</html>