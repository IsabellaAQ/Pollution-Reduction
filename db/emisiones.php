<?php 
	require 'connection.php';

		date_default_timezone_set('America/Bogota'); //determinar zona horaria
	    $emision=intval($_POST['emision']); //valor ingresado por el usuario
		$fecha=$_POST['fecha']; //fecha ingresada por el usuario
		$hora=date('h:i:s a'); //obtener hora

	$result = mysqli_query($conn,"INSERT INTO emisiones (emision,fecha,hora) VALUES ('$emision','$fecha','$hora')")or die("<h2>Error Guardando los datos</h2>"); //insertar datos en la bd
	header('location:../graficos.php'); //redirigir a otra ventana
 ?>