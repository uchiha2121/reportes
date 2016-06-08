<?php 

$opi = isset($_GET['opi']) ? $_GET['opi'] : null;
switch ($opi) 
{
	
		case "alta_hardware":
			$contenido2 = 'alta-hardware.php';
			$titulo = 'Alta de hardware';
			break;	

		case "consultas_hardware":
			$contenido2 = "consulta-hardware.php";
			$titulo = "consulta de hardware";
			break;

		case "modificar_hardware":
			$contenido2 = "modificar-hardware.php";
			$titulo = "modificar hardware";
			break;

        case "reporte_hardware":
			$contenido2 = "reporte-hardware.php";
			$titulo = "reporte hardware";
			break;


	    case "baja_hardware":
			$contenido2 = "baja-hardware.php";
			$titulo = "Baja de hardware";
			break;
	default:
		$contenido2 = "/php/hardware/home.php";
		$titulo = "hardware";
		break;
}


?> 



	

	<nav class="col-xs- col-sm- col-xs-2 col-lg-2" > 
			<ul class="nav nav-pills nav-stacked">
					
					<li><a 	class="cambio" href="?op=hardware&opi=alta_hardware">ALTA</a></li>
					<li><a  class="cambio" href="?op=hardware&opi=consultas_hardware">CONSULTA</a></li>
					<li><a  class="cambio" href="?op=hardware&opi=modificar_hardware">MODIFICAR</a></li>
					<li><a 	class="cambio" href="?op=hardware&opi=reporte_hardware">REPORTE</a></li>
					<li><a 	class="cambio" href="?op=hardware&opi=baja_hardware">BAJA</a></li>
			</ul>
			 
	</nav>




<section class="col-xs- col-sm- col-xs-8 col-lg-8">
	


	<?php include $contenido2;  ?>



</section>





