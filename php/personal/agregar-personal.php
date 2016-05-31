<?php 
include ("/../../conexion/config.php");

			$cedula			   = $_POST['cedula'];
			$nombre			   = $_POST['nombre'];
			$apellido		   = $_POST['apellido'];
			$telefono1		   = $_POST['telefono'];


			$consulta = "INSERT personal VALUES ('".$cedula."','".$nombre."','".$apellido."','".$telefono1."')";

			$resultado = mysqli_query($conexion,$consulta);

 
	

if($resultado) {
die('<button class="close" data-dismiss="alert" ><span>&times;</span></button>
	<p class="text-muted" ><strong>En hora buena: </strong>Registrado con EXITO!!!</p> 
<script>$("#formPersonal")[0].reset();</script>');
};





mysqli_close($conexion);

 ?>



