<?php 
include ("/../../conexion/config.php");

			$idDpto			   = $_POST['codDpto'];
			$nombreDpto 	   = $_POST['nombreDpto'];
			


			


	$consulta    = "INSERT departamentos VALUES ('".$idDpto."','".$nombreDpto."')";



$resultado = mysqli_query($conexion, $consulta);
 
 




if($resultado) {
					die(

								'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button>
								<strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
												<span class="sr-only">Success:</span>En hora buena! </strong> Su registro ha sido envida con <strong>EXITO!</strong></div>

								<script>$("#formDpto")[0].reset();</script>'
					);



}





mysqli_close($conexion);
 ?>



