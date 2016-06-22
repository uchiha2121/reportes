<?php 
include ("/../../conexion/config.php");


			$cedula	        = $_POST['cedula'];
			$nombre         = $_POST['nombre'];
			$apellido       = $_POST['apellido'];
			$telefono       = $_POST['telefono'];
			$departamento   = $_POST['departamento'];


$consulta = "UPDATE `personal` INNER JOIN depto_pers on personal.cedula = depto_pers.id_cedula SET nombre='$nombre', apellido='$apellido', telefono='$telefono', id_depto='$departamento'  WHERE cedula='$cedula'";
			$resultado = mysqli_query($conexion,$consulta);


if($resultado) {
					die(

'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Su modificacion fue <strong>EXITOSA!</strong></div>'
					);



}else{

		die (

		'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Se a producido un Error al Modificar la consulta </div>'

			);


}





mysqli_close($conexion);
 ?>



