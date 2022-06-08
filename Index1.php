<?php
//conectando con la base de datos
include("conexion.php");
$conex = new Conexion();
$returnDB = $conex->conectar();
/*$data = $conex->show($returnDB);*/
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    
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


			.submenu{
				padding-top:38px;
				column-count: 1;
  				column-gap: 5px;
  				column-rule-style: solid;
				column-rule-color: #FB8C00;
				
			}

			li ul.nav> li{
               float:none;
			}

        
			
			 

			  .imagen { float:left; }

		</style>
</head>
<body style= "background-color: #b8caf0;">

    <h1> Hospital General</h1>
	<section style="margin-top:35px;">
		<div id="header">
		<div id="app"></div>
		</div>
	</section>

    <div style="margin-top:75px;">
		<img src="fondoForm.jpg" alt="Hospital" width="748" height="555">
	</div>

</div>
</body>
<script src="menu1.js"></script>
<a href="final_T.php"> Principal </a>
</html>