<?php
//conectando con la base de datos
require_once "conexion.php";
$conexion = new Conexion();
$returnDB = $conexion->conectar();
/*$data = $conexion->show($returnDB);*/
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Formulario paciente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body style="background-color: #b8caf0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form id="nuevo-paciente">
                    <div class="form-group">
                        <label for="paciente">Paciente</label>
                        <input type="text" class="form-control" id="paciente" />
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <input type="text" class="form-control" id="sexo" />
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" id="edad" />
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion" />
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" />
                    </div>

                    <button class="btn btn-primary">Añadir Paciente</button>

                </form>
                <a href="Index1.html"> Inicio </a>
            </div>

            <div class="col-sm-6">
                <a class="btn btn-default" href="Index.html"> Inicio </a>
                <div id="tabla-clasificacion">
                    <table class="table">
                        <thaead>
                            <tr>
                                <th>Paciente</th>
                                <th>Sexo</th>
                                <th>Edad</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                            </tr>
                        </thaead>
                        <tbody id="paciente-tabla">

                        </tbody>
                    </table>
                </div>

                <button class="btn btn-primary" type="button" id="mostrar-tabla">Mostrar Tabla</button>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script sr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="cargarTabla.js"></script>
</body>

</html>