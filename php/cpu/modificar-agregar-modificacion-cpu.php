<?php 
include ("/../../conexion/config.php");


			$code 			   = $_POST['codPresCpu'];
			$sysm			   = $_POST['SistemaO'];
			$proc			   = $_POST['ProCpu'];
			$estado			   = $_POST['estado'];
			$array_componentes = $_POST['componentes'];
			$array_descripcion = $_POST['descripcion'];

 			
			$modificar = "UPDATE cpu SET SO='$sysm', procedencia='$proc', estado='$estado' WHERE cod_cpu='$code' ";
			$modificacion = mysqli_query($conexion,$modificar);

 			$borrado= "DELETE FROM caracteristica_cpu WHERE id_cpu='$code'";
			$borrar = mysqli_query($conexion,$borrado);



			foreach ($array_componentes as $key =>$componentes) {
				
				$descripcion = $array_descripcion[$key];
				
				$consulta = " INSERT INTO caracteristica_cpu VALUES (null,'".$componentes."','".$descripcion."','".$code."')";
				$resultado = mysqli_query($conexion, $consulta);

			} 
					


if($resultado && $borrar) {
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



