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

    <script src="cargarTabla2.js"></script>
</head>
<body style= "background-color: #b8caf0;">
    <div class="col-sm-6">
        <form id="nuevo-familiar">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre"/>
            </div>
            <div class="form-group">
                <label for="parentezco">Parentezco</label>
                <input type="text" class="form-control" id="parentezco"/>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" id="edad"/>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono"/>
            </div>
            <input type="submit" value="Añadir Familiar"/>
        </form>
        <a href="Index1.html"> Inicio </a>
    </div>
    <div class="col-sm-6">
        <div id="tabla-clasificacion">
            <table class="table">
                <thaead>
                    <tr>
                        <th>Nombre</th>
                        <th>Parentezco</th>
                        <th>Edad</th>
                        <th>Teléfono</th>
                    </tr>
                </thaead>
                <tbody id="familiar-tabla">
                    
                </tbody>
            </table>
        </div>
        <button id="mostrar-tabla">Mostrar Tabla</button>
    </div>
</div>
</body>
</html>