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
	
<header id="" class="col-xs-12 col-sm-12 col-xs-12 col-lg-12 hdr" >
	<span>Sistema para el control de reportes</span>

</header>

			<spam class="col-xs-0 col-sm-0 col-xs-1 col-lg-1"></spam>
			<main class="container-fluid">

							<nav class="col-xs-12 col-sm-12 col-xs-10 col-lg-10"> 
									<ul class="nav nav-pills nav-justified">
											<li id="Hmo" ><a  class="cambio" href="index.php">HOME</a></li>
											<li id="Epo" ><a  class="cambio" href="?op=prestamo">PRESTAMO EQUIPO</a></li>
											<li id="Cpu" ><a  class="cambio" href="?op=cpu">CPU</a></li>
											<li id="Hrw" ><a  class="cambio" href="?op=hardware">HARDWARE</a></li>
											<li id="Dto" ><a  class="cambio" href="?op=departamento">DEPARTAMENTO</a></li>
											<li id="Per" ><a  class="cambio" href="?op=personal">PERSONAL</a></li>

									</ul>
									 
							</nav>
						
			<spam class="col-xs-0 col-sm-0 col-xs-1 col-lg-1"></spam>


			<section class="row">

							<?php include $contenido;  ?>

			</section>

			<footer></footer>


			</main>
<?php 
include ("php/funciones/scripts.php");
 ?>		

</body>
</html>