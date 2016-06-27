<?php 
include ("/../../conexion/config.php");



			$cedula			   = $_POST['cedula'];


$consulta = "DELETE FROM  personal WHERE cedula='$cedula'";

$resultado = mysqli_query($conexion,$consulta);


if($resultado) {
					die(

'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Se a eliminado <strong> CORRECTAMENTE!</strong></div>'
					);



}else{

		die (

		'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Se a producido un Error al Modificar la consulta </div>'

			);


}





mysqli_close($conexion);
 ?>



