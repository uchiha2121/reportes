<?php 
include ("/../../conexion/config.php");

			$code 			   = $_POST['codPresCpu'];
			$sysm			   = $_POST['SistemaO'];
			$proc			   = $_POST['ProCpu'];
			$estado			   = $_POST['estado'];
			$array_componentes = $_POST['componentes'];
			$array_descripcion = $_POST['descripcion'];
			
			$validar ="SELECT * FROM cpu WHERE cod_cpu='$code'";
			$validacion = mysqli_query($conexion,$validar);

if (mysqli_num_rows($validacion)>0) {


die('<div class="alert alert-danger" role="alert"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span>Error!</strong>  Serial Cpu  <strong>Ya registrado!</strong></div>');

} else {

	
			$consulta1 = " INSERT INTO cpu VALUES ('".$code."','".$sysm."','".$proc."',0,'".$estado."')";

			$resultado1 = mysqli_query($conexion,$consulta1);
		


	foreach ($array_componentes as $key =>$componentes) {
		
		$descripcion = $array_descripcion[$key];
		
		$consulta2 = " INSERT INTO caracteristica_cpu VALUES (null,'".$componentes."','".$descripcion."','".$code."')";
		$resultado2 = mysqli_query($conexion, $consulta2);

} 
	

if($resultado1 && $resultado2) {


die('<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button>
								<strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
												<span class="sr-only">Success:</span>En hora buena!</strong>  Su registro ha sido envida con  <strong>EXITO!</strong></div><script>$("#formCpu")[0].reset();</script>');
};





}




mysqli_close($conexion);

 ?>



