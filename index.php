
<?php 
//error_reporting(E_ALL ^ E_NOTICE);
//$op = $_GET=["op"];

$op = isset($_GET['op']) ? $_GET['op'] : null;
$titulo="";
switch ($op) 
{
	
		case "alta":
			$contenido= 'php/prestamo/alta-prestamo.php';
			$titulo= 'Alta de prestamo';
			break;

		case "baja":
			$contenido= "php/prestamo/baja-prestamo.php";
			$titulo= "Baja de prestamo";
			break;

		case "consultas":
			$contenido= "php/prestamo/consulta-prestamo.php";
			$titulo= "consulta de prestamo";
			break;

		case "modificar":
			$contenido= "php/prestamo/modificar-prestamo.php";
			$titulo= "modificar prestamo";
			break;
	
	default:
		$contenido= "php/prestamo/home.php";
		$titulo= "inicio";
		break;
}


?> 


<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	
	<title><?php echo "$titulo"; ?></title>


</head>
<body>
	
<main>
	<header></header>

	<nav> 
			<ul>
					<li><a  class="cambio" href="index.php">HOME</a></li>
					<li><a 	class="cambio" href='?op=alta'>ALTA</a></li>
					<li><a 	class="cambio" href='?op=baja'>BAJA</a></li>
					<li><a  class="cambio" href="?op=consultas">CONSULTA</a></li>
					<li><a  class="cambio" href="?op=modificar">MODIFICAR</a></li>
			</ul>
			 
	</nav>




<section>
	
<article>

	<?php include $contenido ;  ?>

</article>

</section>

<footer></footer>


</main>


</body>
</html>