<?php 

include ("/php/funciones/menu_index.php");

 ?>
<!DOCTYPE html>
<html lang="es">
<head>

		<meta charset="UTF-8">
			
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<title><?php echo "$titulo"; ?></title>

</head>
<body>
	
<main class="container-fluid">
		<header></header>

			<nav> 
					<ul class="nav nav-pills nav-justified">
							<li><a  class="cambio" href="index.php">HOME</a></li>
							<li><a  class="cambio" href="?op=prestamo">PRESTAMO EQUIPO</a></li>
							<li><a 	class="cambio" href="?op=cpu">CPU</a></li>
							<li><a 	class="cambio" href="?op=hardware">HARDWARE</a></li>
							<li><a  class="cambio" href="?op=departamento">DEPARTAMENTO</a></li>
							<li><a  class="cambio" href="?op=personal">PERSONAL</a></li>
							<li><a  class="cambio" href="?op=baja">BAJA PRESTAMO</a></li>

					</ul>
					 
			</nav>




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