<?php 

include ("/php/funciones/menu_index.php");

 ?>
<!DOCTYPE html>
<html lang="es">
<head>

		<meta charset="UTF-8">
			
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<title><?php echo "$titulo"; ?></title>

</head>
<body>
	


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
								<li id="Bja" ><a  class="cambio" href="?op=baja">BAJA PRESTAMO</a></li>

						</ul>
						 
				</nav>
			
<spam class="col-xs-0 col-sm-0 col-xs-1 col-lg-1"></spam>

<header class="col-xs-12 col-sm-12 col-xs-12 col-lg-12"></header>



<section class="row">
	
			

				<?php include $contenido;  ?>

			

</section>

<footer></footer>


</main>

		<script src="js/jquery-2.2.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/crear.js"></script>
		<script src="js/ajax.js"></script>
</body>
</html>