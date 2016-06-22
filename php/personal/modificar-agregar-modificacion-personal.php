<?php 
include ("/../../conexion/config.php");


			$id 	        = $_POST['codPresCpu'];
			$procedencia    = $_POST['ProCpu'];
			$sistemaOp      = $_POST['SistemaO'];
			$estado         = $_POST['estado'];

		$consulta = "UPDATE cpu SET SO='$sistemaOp', procedencia='$procedencia', estado='$estado' WHERE cod_cpu='$id' ";

		$resultado = mysqli_query($conexion,$consulta);


			$array_componentes 	     = $_POST['componentes'];
			$array_descripcion     	 = $_POST['descripcion'];


		$eliminar = "DELETE FROM caracteristica_cpu WHERE  id_cpu= '$id' ";
		$eliminacion = mysqli_query($conexion,$eliminar);

		foreach ($array_componentes as $key => $componentes) {

				$descripcion =  $array_descripcion[$key];
				$consulta2    = "INSERT INTO caracteristica_cpu VALUES (null,'".$componentes."','".$descripcion."','".$id."')";

		$resultado2 = mysqli_query($conexion,$consulta2);
		}




if($resultado && $eliminacion && $resultado2 ) {
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



