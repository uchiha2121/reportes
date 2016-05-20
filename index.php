
<?php

//error_reporting(E_ALL ^ E_NOTICE);
//$op = $_GET=["op"];

$op = isset($_GET['op']) ? $_GET['op'] : null;
$titulo="";
switch ($op) 
{
	
		case "prestamo":
			$contenido= 'php/prestamo/home_prestamo.php';
			$titulo= 'Prestamo De Equipo';
			break;

		case "cpu":
			$contenido= "php/cpu/home_cpu.php";
			$titulo= "Cargar CPU";
			break;

						/*case "alta":
						$contenido2 = 'alta-cpu.php';
						$titulo = 'Alta de cpu';
						break;*/

		case "hardware":
			$contenido= "php/cpu/consulta-cpu.php";
			$titulo= "consulta de cpu";
			break;

		case "departamento":
			$contenido= "php/cpu/modificar-cpu.php";
			$titulo= "modificar cpu";
			break;

		case "personal":
			$contenido= "php/cpu/modificar-cpu.php";
			$titulo= "modificar cpu";
			break;

		case "baja":
			$contenido= "php/cpu/modificar-cpu.php";
			$titulo= "modificar cpu";
			break;
	
	default:
		$contenido= "home.php";
		$titulo= "inicio";
		break;
}


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