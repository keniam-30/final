<?php
//conectando con la base de datos
include("conexion.php");
$conexion = new Conexion();
$returnDB = $conexion->conectar();

?>

<html lang="en">
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

      <script sr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="cargarTabla3.js"></script>
</head>
<body style= "background-color: #b8caf0;">
    <div class="col-sm-6">
        <form id="nuevo-condicion">
            <div class="form-group">
                <label for="enfermedad">Enfermedad</label>
                <input type="text" class="form-control" id="enfermedad"/>
            </div>
            <div class="form-group">
                <label for="tiempo">Tiempo con la enfermedad</label>
                <input type="text" class="form-control" id="tiempo"/>
            </div>
            <div class="form-group">
                <label for="detalle">Detalle</label>
                <input type="text" class="form-control" id="detalle"/>
            </div>
          
            <input type="submit" value="Añadir condicion"/>
        </form>
        <a href="Index1.html"> Inicio </a>

    </div>
    <div class="col-sm-6">
        <div id="tabla-clasificacion">
            <table class="table">
                <thaead>
                    <tr>
                        <th>Enfermedad</th>
                        <th>Tiempo con la enfermedad</th>
                        <th>Detalle</th>
                    </tr>
                </thaead>
                <tbody id="condicion-tabla">
                    
                </tbody>
            </table>
        </div>
        <button id="mostrar-tabla">Mostrar Tabla</button>
    </div>
</div>
</body>