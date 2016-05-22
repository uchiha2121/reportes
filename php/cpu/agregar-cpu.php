<?php 
include ("/../../conexion/config.php");

			$code 			   = $_POST['codPresCpu'];
			$array_componentes = $_POST['componentes'];
			$array_descripcion = $_POST['descripcion'];
			


$sql_array = array();

	foreach ($array_componentes as $clave =>$componentes) {
		
		$descripcion = $array_descripcion[$clave];
		
		$consulta= "INSERT caracteristica_cpu VALUES('".$componentes."','".$descripcion."',".$code.")";
} 

	if(mysqli_query($conexion, $consulta)) {
die('Persona(s) ingresada(s)');
};





mysqli_close($conexion);
//header("location: /index.php?op=cpu&opi=alta&mensaje=$mensaje");
 ?>



