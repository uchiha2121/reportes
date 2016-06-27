<?php 
include ("/../../conexion/config.php");



			$cod		   			  = $_POST['cod'];
			$departamento			  = $_POST['nombre'];


$consulta = "UPDATE departamentos SET nombre_depto='$departamento' WHERE cod_depto='$cod'";

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



