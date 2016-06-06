<?php 
include ("/../../conexion/config.php");

			$id 	     = $_POST['codHarw'];
			$componentes = $_POST['Componente'];
			$descripcion = $_POST['HDescrip'];


			
$eliminar = "DELETE FROM hardware WHERE serial_h = '$id' ";



$eliminacion = mysqli_query($conexion,$eliminar);

$consulta    = "INSERT hardware VALUES ('".$id."','".$componentes."','".$descripcion."')";

$resultado = mysqli_query($conexion, $consulta);



if($eliminacion&&$resultado) {
					die(

'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Su modificacion fue <strong>EXITOSA!</strong></div>'
					);



}else{

		die (

		'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Se a producido un Error al Modificar la consulta </div>'

			);


};





mysqli_close($conexion);
 ?>



