<?php 
//conexion con la base de datos y el servidor
  $servername = "localhost"; //nombre del servidor
  $database = "pr"; //nombre bd
  $username = "root"; //nombre usuario
  $password = ""; //contraseña para ingresar a mysql
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database); //generar la conexión con la bd
  // Check connection
  if (!$conn) { //Si es diferente a la conexión
      die("Conexión fallida " . mysqli_connect_error());
  }
  //echo "Conexión exitosa"; 
 ?>