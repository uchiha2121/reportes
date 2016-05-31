<?php 

$opi = isset($_GET['opi']) ? $_GET['opi'] : null;
switch ($opi) 
{
	
		case "alta_personal":
			$contenido2 = 'alta-personal.php';
			$titulo = 'Alta de personal';
			break;

		case "baja_personal":
			$contenido2 = "baja-personal.php";
			$titulo = "Baja de personal";
			break;

		case "consultas_personal":
			$contenido2 = "consulta-personal.php";
			$titulo = "consulta de personal";
			break;

		case "modificar_personal":
			$contenido2 = "modificar-personal.php";
			$titulo = "modificar personal";
			break;
	
	default:
		$contenido2 = "/php/personal/home.php";
		$titulo = "inicio";
		break;
}


?> 



	

	<nav class="col-xs- col-sm- col-xs-2 col-lg-2" > 
			<ul class="nav nav-pills nav-stacked">
					
					<li><a 	class="cambio" href="?op=personal&opi=alta_personal">ALTA</a></li>
					<li><a  class="cambio" href="?op=personal&opi=consultas_personal">CONSULTA</a></li>
					<li><a  class="cambio" href="op=personal&?opi=modificar_personal">MODIFICAR</a></li>
					<li><a 	class="cambio" href="?op=personal&opi=baja_personal">BAJA</a></li>
			</ul>
			 
	</nav>




<section class="col-xs- col-sm- col-xs-8 col-lg-8">
	


	<?php include $contenido2;  ?>



</section>




