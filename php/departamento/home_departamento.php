<?php 

$opi = isset($_GET['opi']) ? $_GET['opi'] : null;
switch ($opi) 
{
	
		case "alta_departamento":
			$contenido2 = 'alta-departamento.php';
			$titulo = 'Alta de departamento';
			break;

		case "baja_departamento":
			$contenido2 = "baja-departamento.php";
			$titulo = "Baja de departamento";
			break;

		case "consultas_departamento":
			$contenido2 = "consulta-departamento.php";
			$titulo = "consulta de deparatamento";
			break;

		case "modificar_departamento":
			$contenido2 = "modificar-departamento.php";
			$titulo = "modificar departamento";
			break;
	
	default:
		$contenido2 = "/php/departamento/home.php";
		$titulo = "inicio";
		break;
}


?> 



	

	<nav class="col-xs- col-sm- col-xs-2 col-lg-2" > 
			<ul class="nav nav-pills nav-stacked">
					
					<li><a 	class="cambio" href="?op=departamento&opi=alta_departamento">ALTA</a></li>
					<li><a  class="cambio" href="?op=departamento&opi=consultas_departamento">CONSULTA</a></li>
					<li><a  class="cambio" href="op=departamento&?opi=modificar_departamento">MODIFICAR</a></li>
					<li><a 	class="cambio" href="?op=departamento&opi=baja_departamento">BAJA</a></li>
			</ul>
			 
	</nav>




<section class="col-xs- col-sm- col-xs-8 col-lg-8">
	


	<?php include $contenido2;  ?>



</section>




