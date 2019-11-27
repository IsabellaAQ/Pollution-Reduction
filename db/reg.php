<?php
  require 'connection.php';
  //obtenemos los datos ingresados por el usuario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];
    $contraseñaUser = md5($pass);
//consulta 
  $result = mysqli_query($conn,"INSERT INTO usuarios (nombre,apellido,usuario, password) VALUES('$nombre','$apellido','$usuario','$contraseñaUser')") or die("<h2>Error Guardando los datos</h2>"); //si no funciona se le da a saber al usuario
  //mensaje de registro correcto y redirige a otra ventana
  echo'
    <script> 
      alert("Registro Exitoso");
      location.href="../registro_emisiones.html";
    </script>
  '
?>