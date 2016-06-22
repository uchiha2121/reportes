<?php 
include ("/../../conexion/config.php");

			$id 			   = $_POST['codPresHwr'];
			$array_componentes = $_POST['componentes'];
			$array_descripcion = $_POST['descripcion'];
			$array_estado      = $_POST['estado'];





foreach ($array_componentes as $key => $componentes) {

	$codHwr      =  $id[$key];
	$descripcion =  $array_descripcion[$key];
	$estadoO     =  $array_estado[$key];
	$consulta    = "INSERT hardware VALUES ('".$codHwr."','".$componentes."','".$descripcion."',0,'".$estadoO."')";



$resultado = mysqli_query($conexion, $consulta);
 
 

}//foreach


if($resultado) {
					die(

								'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button>
								<strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
												<span class="sr-only">Success:</span>En hora buena! </strong> Su registro ha sido envida con <strong>EXITO!</strong></div>

								<script>$("#formHrw")[0].reset();</script>'
					);



};





mysqli_close($conexion);
 ?>



