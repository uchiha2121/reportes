<?php 

include ("/php/funciones/menu_index.php");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>

		<meta charset="UTF-8">
			<!-- bootstrap -->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		 <!-- Alertity -->
    <link rel="stylesheet" href="js/alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
	   <!--titulo  -->

	   <link rel="stylesheet" type="text/css" href="css/normalize.css">
		<title><?php echo "$titulo"; ?></title>

</head>
<body>
	
<header class="hdr" >

<div class="col-xs-2 col-sm-2 col-xs-2 col-lg-2 imgg"><img id="logo" src="imagenes/logo.png"></div>
	<div class="col-xs-8 col-sm-8 col-xs-8 col-lg-8 titulo"><p>Sistema para el control de</p><p>Equipos informaticos</p></div>
	<div class="col-xs-2 col-sm-2 col-xs-2 col-lg-2 imgg"></div>

</header>

			<div class="container-fluid">
		
					<spam class="col-xs-0 col-sm-0 col-xs-1 col-lg-1"></spam>
							<nav class="col-xs-12 col-sm-12 col-xs-10 col-lg-10 menu"> 
									<ul class="nav nav-pills nav-justified">
											<li id="Hmo" ><a  class="cambio" href="index.php">INICIO</a></li>
											<li id="Epo" ><a  class="cambio" href="?op=prestamo">PRESTAMO EQUIPO</a></li>
											<li id="Cpu" ><a  class="cambio" href="?op=cpu">CPU</a></li>
											<li id="Hrw" ><a  class="cambio" href="?op=hardware">HARDWARE</a></li>
											<li id="Per" ><a  class="cambio" href="?op=personal">PERSONAL</a></li>
											<li id="Dto" ><a  class="cambio" href="?op=departamento">DEPARTAMENTO</a></li>
											

									</ul>
									 
							</nav>
						
					<spam class="col-xs-0 col-sm-0 col-xs-1 col-lg-1"></spam>
			</div>

			<main class="container-fluid contenido">
			<section class="row seccion">

							<?php include $contenido;  ?>

			</section>

			


			</main>

			<footer class="pie"><div class="copy">Unefa | Copyright © 2016 | Sheeddy</div></footer>
<?php 
include ("php/funciones/scripts.php");
 ?>		
</body>
</html>