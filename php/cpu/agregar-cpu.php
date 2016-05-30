<?php 
include ("/../../conexion/config.php");

			$code 			   = $_POST['codPresCpu'];
			$sysm			   = $_POST['SistemaO'];


			$consulta1 = " INSERT INTO cpu VALUES ('".$code."','".$sysm."')";

			$resultado1 = mysqli_query($conexion,$consulta1);
		



			$array_componentes = $_POST['componentes'];
			$array_descripcion = $_POST['descripcion'];
			








	foreach ($array_componentes as $key =>$componentes) {
		
		$descripcion = $array_descripcion[$key];
		
		$consulta2 = " INSERT INTO caracteristica_cpu VALUES (null,'".$componentes."','".$descripcion."','".$code."')";


$resultado2 = mysqli_query($conexion, $consulta2);

} 
	

if($resultado1 && $resultado2) {
die('<button class="close" data-dismiss="alert" ><span>&times;</span></button>
	<p class="text-muted" ><strong>En hora buena:</strong>Registro con EXITO!!!</p> 
<script>$("#formCpu")[0].reset();</script>');
};





mysqli_close($conexion);

 ?>



