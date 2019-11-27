
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Registro</title>
  <link rel="icon" type="image/png" href="imagenes/Logo2.0.png"/>
  <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0,minimun-scale=1.0,maximun-scale=1.0">
</head>
<body bgcolor=#49c485>
  <div id="registro">
    <img src="Imagenes/registro.png" alt="Registro" width="110" height="100"><br>
    <form action="db/reg.php" method="post"> 
    <!--ingresar datos y validar campos de sólo letras y su tamaño-->     
        <input type="text" id="nombre" name="nombre"  placeholder="Nombre" onclick='this.value=""' pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,20}"required><br>
        <input type="text" id="apellido" name="apellido"  placeholder="Apellido" onclick='this.value=""'  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,20}" required><br>
        <input type="text" id="usuario"name="usuario" placeholder="Nombre de usuario" onclick='this.value=""' maxlength="20" minlength="3" required><br>
        <input type="password" name="password" id="password" placeholder="Contraseña" maxlength="15" minlength="6" required><br>
        <input type="submit" id="Registrar" value="Registrar"> <br>
        <a href="ingreso.php"><input type="button" id="cancelar" value="Cancelar" ><STYLE>{text-decoration: none;} </STYLE></a><br>
    </form>
  </div>
</body>
</html>