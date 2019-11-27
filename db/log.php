<?php 
require 'connection.php'; //importamos la conexión con la bd
    session_start(); //iniciar sesión
    $usuario=$_POST['usuario']; //obtener dato ingresado por el usuario
    $pass = $_POST['password'];
    $contraseñaUser = md5($pass);//encriptar contraseña
    $q="SELECT COUNT(*) as contar FROM usuarios WHERE usuario = '$usuario' AND password = '$contraseñaUser'";
    $consulta= mysqli_query($conn,$q);
    $array=mysqli_fetch_array($consulta);
    if ($array['contar'] >0) {//identificar si está el dato en la bd
      $_SESSION['username']=$usuario;
      header("location:../registro_emisiones.html");
    }else{
      echo "Datos incorrectos";
    }
 ?>