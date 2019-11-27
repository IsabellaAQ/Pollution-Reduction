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
      <head> 
    <meta charset="UTF-8">
    <link rel="stylesheet"  href="css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registro de emisiones</title>
    <link rel="icon" type="image/png" href="imagenes/Logo2.0.png"/>
        <script type="text/javascript">
            window.onload = function () {
                var dataLength = 0;
                var data = [];
                $.getJSON("data.php", function (result) {
                    dataLength = result.length;
                    for (var i = 0; i < dataLength; i++) {
                        data.push({
                            x: parseInt(result[i].valorx),
                            y: parseInt(result[i].valory)
                        });
                    }
                    ;
                    chart.render();
                });
                var chart = new CanvasJS.Chart("chart", {
                    title: {
                        text: "Registro de emisiones"
                    },
                    axisX: {
                        title: "",
                    },
                    axisY: {
                        title: "ppm",
                    },
                    data: [{type: "line", dataPoints: data}],
                });
            }
        </script>
        <script type="text/javascript" src="script/canvasjs.min.js"></script>
        <script type="text/javascript" src="script/jquery-2.2.3.min.js"></script>
    </head>
    <body>
      <div id="ContSuperior">
        <header>      <!--primera parte de arriba-->
            <div id="Logotipo">   
              <!--contenedor style es el que permite colocarle un color al background--> 
              <a href="registro_emisiones.php"><img src="Imagenes/Logo1.0.png" alt="Practica1"></a>
            </div>
            <div id="botones">
              <a href="perfil.html"/><img src="Imagenes/usuario.png" alt="Practica1"></a>   
              <a href="ajustes.html"/><img src="Imagenes/Ajustes.png" alt="Practica1"></a>
            </div>
        </header>
      </div>
      <br><br>
      <div id="chart" style="height:500px;"></div>
      <div class="container-fluid">
        <h1 class="page-header text-center">Gráfico Evolución lecturas  </h1>
          <div class="row" align="center">
            <div class="col-md-3">
              <h3 class="page-header text-center">Añadir Lecturas</h3>
                <form method="POST" action="db/emisiones.php">
                  <div class="form-group">
                    <label>Valor:</label>
                    <input type="number" class="form-control" name="emision" required><P>PPM</P>
                  </div>
                  <div class="form-group">
                    <label>Fecha:</label>
                    <input type="date" class="form-control" name="fecha" required>
                  </div>
                  <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
                </form>
          </div>
        </div>
      </div>
    </body> 
</html>