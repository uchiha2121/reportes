
<?php 
//error_reporting(E_ALL ^ E_NOTICE);
//$op = $_GET=["op"];

$op = isset($_GET['op']) ? $_GET['op'] : null;
$titulo="";
switch ($op) 
{
	
		case "alta":
			$contenido= 'php/cpu/alta-cpu.php';
			$titulo= 'Alta de cpu';
			break;

		case "baja":
			$contenido= "php/cpu/baja-cpu.php";
			$titulo= "Baja de cpu";
			break;

		case "consultas":
			$contenido= "php/cpu/consulta-cpu.php";
			$titulo= "consulta de cpu";
			break;

		case "modificar":
			$contenido= "php/cpu/modificar-cpu.php";
			$titulo= "modificar cpu";
			break;
	
	default:
		$contenido= "php/cpu/home.php";
		$titulo= "inicio";
		break;
}


?> 


<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	
	<link rel="stylesheet" src="https://code.jquery.com/jquery-2.2.3.min.js">
	
	<script>
		!window.jquery-2.2.3 && document.write("<script src='js/jquery-2.2.3.min.js' ><\/script>");

	</script>

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

	<?php include $contenido;  ?>

</article>

</section>

<footer></footer>


</main>


</body>
</html>