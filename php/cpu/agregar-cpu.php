<?php 
include ("/../../conexion/config.php");


			$array_componentes = $_POST['componentes'];
			$array_descripcion = $_POST['descripcion'];
			//$code = $_POST['codPresCpu'];


$sql_array = array();

	foreach ($array_componentes as $clave =>$componentes) {
		
		$descripcion = $array_descripcion[$clave];
		$datoUnico[] = '("'.$componentes.'", "'.$descripcion.'")';
		$consulta = "INSERT INTO 'caracteristica_cpu' ('c_nombre','espesificacion') VALUES" . implode(', ', $datoUnico);
} 

	if(mysqli_query($conexion, $consulta)) {
die('Persona(s) ingresada(s)
<script>$("#formCpu")[0].reset();</script>');
};





mysqli_close($conexion);
//header("location: /index.php?op=cpu&opi=alta&mensaje=$mensaje");
 ?>



