<?php 
include ("/../../conexion/config.php");

			$id 			   = $_POST['codPresHwr'];
			$array_componentes = $_POST['componentes'];
			$array_descripcion = $_POST['descripcion'];
			
$sql_array = array();
foreach ($array_componentes as $key => $componentes) {

	$codHwr      =  $id[$key];
	$descripcion =  $array_descripcion[$key];
	$datoUnico[] = '("'.$codHwr.'","'.$componentes.'","'.$descripcion.'")';
	$consulta    = "INSERT INTO 'hardware' ('serial_h','h_nombre','especificacion') VALUES" . implode(' ',$datoUnico);
}



	if(mysqli_query($conexion, $consulta)) {
die('Persona(s) ingresada(s)');
};





mysqli_close($conexion);
//header("location: /index.php?op=cpu&opi=alta&mensaje=$mensaje");
 ?>



