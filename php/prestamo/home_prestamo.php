<?php 

$opi = isset($_GET['opi']) ? $_GET['opi'] : null;
switch ($opi) 
{
	
		case "alta_prestamo":
			$contenido2 = 'alta-prestamo.php';
			$titulo = 'Alta de prestamo';
			break;	

		case "consultas_prestamo":
			$contenido2 = "consulta-prestamo.php";
			$titulo = "consulta de prestamo";
			break;

		case "modificar_prestamo":
			$contenido2 = "modificar-prestamo.php";
			$titulo = "modificar prestamo";
			break;

        case "reporte_prestamo":
			$contenido2 = "reporte-prestamo.php";
			$titulo = "reporte prestamo";
			break;


	    case "baja_prestamo":
			$contenido2 = "baja-prestamo.php";
			$titulo = "Baja de prestamo";
			break;
	default:
		$contenido2 = "/php/prestamo/home.php";
		$titulo = "prestamo";
		break;
}


?> 



	

	<nav class="col-xs- col-sm- col-xs-2 col-lg-2" > 
			<ul class="nav nav-pills nav-stacked">
					
					<li><a 	class="cambio" href="?op=prestamo&opi=alta_prestamo">ALTA</a></li>
					<li><a  class="cambio" href="?op=prestamo&opi=consultas_prestamo">CONSULTA</a></li>
					<li><a  class="cambio" href="?op=prestamo&opi=modificar_prestamo">MODIFICAR</a></li>
					<li><a 	class="cambio" href="?op=prestamo&opi=reporte_prestamo">REPORTE</a></li>
					<li><a 	class="cambio" href="?op=prestamo&opi=baja_prestamo">BAJA</a></li>
			</ul>
			 
	</nav>




<section class="col-xs- col-sm- col-xs-8 col-lg-8">
	


	<?php include $contenido2;  ?>



</section>





