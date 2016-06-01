<?php 
include ("/../../conexion/config.php");

			$idDpto			   = $_POST['codDpto'];
			$nombreDpto 	   = $_POST['nombreDpto'];
			


			


	$consulta    = "INSERT departamentos VALUES ('".$idDpto."','".$nombreDpto."')";



$resultado = mysqli_query($conexion, $consulta);
 
 




if($resultado) {
die('<button class="close" data-dismiss="alert" ><span>&times;</span></button>
	<p class="text-muted" ><strong>En hora buena: </strong>Registrado con EXITO!!!</p> 
<script>$("#formDpto")[0].reset();</script>');
};





mysqli_close($conexion);
//header("location: /index.php?op=cpu&opi=alta&mensaje=$mensaje");
 ?>



