<?php
//conectando con la base de datos
include("conexion.php");
$conexion = new Conexion();
$returnDB = $conexion->conectar();
/*$data = $conexion->show($returnDB);*/
?>
<html lang="en">
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

      <script sr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="cargarTabla4.js"></script>
</head>
<body style= "background-color: #b8caf0;">
    <div class="col-sm-6">
        <form id="nuevo-internamiento">
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="text" class="form-control" id="fecha"/>
            </div>
            <div class="form-group">
                <label for="centroM">Centro Medico</label>
                <input type="text" class="form-control" id="centroM"/>
            </div>
            <div class="form-group">
                <label for="diagnostico">Diagnóstico</label>
                <input type="text" class="form-control" id="diagnostico"/>
            </div>
          
            <input type="submit" value="Añadir Internamiento"/>
        </form>
        <a href="Index1.html"> Inicio </a>

    </div>
    <div class="col-sm-6">
        <div id="tabla-clasificacion">
            <table class="table">
                <thaead>
                    <tr>
                        <th>Fecha</th>
                        <th>Centro Medico</th>
                        <th>Diagnóstico</th>
                    </tr>
                </thaead>
                <tbody id="internamiento-tabla">
                    
                </tbody>
            </table>
        </div>
        <button id="mostrar-tabla">Mostrar Tabla</button>
    </div>
</div>
</body>
</html>