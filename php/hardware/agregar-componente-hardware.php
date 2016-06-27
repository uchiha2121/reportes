<?php 
include ("/../../conexion/config.php");


			$nombreComp 	   = $_POST['nombreComp'];
			


			


	$consulta    = "INSERT componentes_hrw VALUES (null,'".$nombreComp."')";
	$validar    = "SELECT * FROM componentes_hrw WHERE nombre_h='$nombreComp'";


$resultado = mysqli_query($conexion, $consulta);
 
 




if($resultado) {
					die(

								'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button>
								<strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
												<span class="sr-only">Success:</span>En hora buena! </strong> Su registro ha sido envida con <strong>EXITO!</strong></div>

								<script>$("#formAltComp")[0].reset();</script>'
					);



}else{


die (

'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only"></span>Error:</strong> No se agregar el registro, porque ese componente ya existe. o no cumple con los parametros  </div>'

);


}





mysqli_close($conexion);
 ?>



