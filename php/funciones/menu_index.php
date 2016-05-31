
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
			$titulo= "CPU";
			break;

		case "hardware":
			$contenido= "php/hardware/home_hardware.php";
			$titulo= "Hardware";
			break;

		case "departamento":
			$contenido= "php//home_departamento.php";
			$titulo= "Deparamento";
			break;

		case "personal":
			$contenido= "php/personal/home_personal.php";
			$titulo= "Personal";
			break;

		case "baja":
			$contenido= "php//home_baja.php";
			$titulo= "Baja";
			break;
	
	default:
		$contenido= "home.php";
		$titulo= "inicio";
		break;
}


?> 