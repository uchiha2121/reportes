<?php 
include ("/../../conexion/config.php");


			$id 	     = $_POST['codPresCpu'];
			

$consulta = "UPDATE cpu SET estado='1' WHERE cod_cpu='$id'";

$resultado = mysqli_query($conexion, $consulta);



if($resultado) {
					die(

'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Eliminado con <strong>EXITOSA!</strong></div>'
					);



}else{

		die (

		'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Se a producido un Error al eliminarlo </div>'

			);


};





mysqli_close($conexion);
 ?>



