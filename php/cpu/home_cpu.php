<?php 

$opi = isset($_GET['opi']) ? $_GET['opi'] : null;
switch ($opi) 
{
	
		case "alta_cpu":
			$contenido2 = 'alta-cpu.php';
			$titulo = 'Alta de cpu';
			break;

		case "baja_cpu":
			$contenido2 = "baja-cpu.php";
			$titulo = "Baja de cpu";
			break;

		case "consultas_cpu":
			$contenido2 = "consulta-cpu.php";
			$titulo = "consulta de cpu";
			break;

		case "modificar_cpu":
			$contenido2 = "modificar-cpu.php";
			$titulo = "modificar cpu";
			break;
	
	default:
		$contenido2 = "/php/cpu/home.php";
		$titulo = "inicio";
		break;
}


?> 



	

	<nav class="col-xs- col-sm- col-xs-2 col-lg-2" > 
			<ul class="nav nav-pills nav-stacked">
					
					<li><a 	class="cambio" href="?op=cpu&opi=alta_cpu">ALTA</a></li>
					<li><a  class="cambio" href="?op=cpu&opi=consultas_cpu">CONSULTA</a></li>
					<li><a  class="cambio" href="op=cpu&?opi=modificar_cpu">MODIFICAR</a></li>
					<li><a 	class="cambio" href="?op=cpu&opi=baja_cpu">BAJA</a></li>
			</ul>
			 
	</nav>




<section class="col-xs- col-sm- col-xs-8 col-lg-8">
	


	<?php include $contenido2;  ?>



</section>




