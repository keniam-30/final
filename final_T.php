<?php

session_start(); 

if(empty($_SESSION)){
    header('Location: login.php');
    exit;
}

//conectando con la base de datos
require_once "conexion.php";
$conexion = new Conexion();
$returnDB = $conexion->conectar();
/*$data = $conexion->show($returnDB);*/
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Final</title>
    
		<style type="text/css">
			
			*{
				margin:0px;
				padding:0px;
			}
			
			#header{
				margin:auto;
				width:auto;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#07313f;
				color:#FFFFFF;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#07313f;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				/*min-width:140px;*/
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}

			li ul.nav> li{
               float:none;
			   
			}

        
			
			 

			  .imagen { float:left; }

			
			

		</style>
</head>
<body style= "background-color: #b8caf0;">

    <h1 align= "center"> Todos los trabajos solicitados</h1>
	<section style="margin-top:35px;">
		<div id="header">
		<div id="app"></div>
		</div>
	</section>

    <div style="margin-top:75px;">
		<img src="final.jpeg" alt="fondo" width="1200" height="600">
	</div>

</div>
</body>
<script src="T_final.js"></script>
</html>