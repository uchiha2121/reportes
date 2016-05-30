<?php 
include ("/../../conexion/config.php");

			$id 			   = $_POST['codPresHwr'];
			$array_componentes = $_POST['componentes'];
			$array_descripcion = $_POST['descripcion'];


			
$sql_array = array();
foreach ($array_componentes as $key => $componentes) {

	$codHwr      =  $id[$key];
	$descripcion =  $array_descripcion[$key];
	$consulta    = "INSERT hardware VALUES ('".$codHwr."','".$componentes."','".$descripcion."')";



$resultado = mysqli_query($conexion, $consulta);
 
 

}//foreach


if($resultado) {
die('<button class="close" data-dismiss="alert" ><span>&times;</span></button>
	<p class="text-muted" ><strong>En hora buena:</strong>Registro con EXITO!!!</p> 
<script>$("#formHrw")[0].reset();</script>');
};





mysqli_close($conexion);
//header("location: /index.php?op=cpu&opi=alta&mensaje=$mensaje");
 ?>



