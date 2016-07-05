<?php 
include ("/../../conexion/config.php");

			$idDpto			   = $_POST['codDpto'];
			$nombreDpto 	   = $_POST['nombreDpto'];
			
				$validar ="SELECT * FROM departamentos WHERE cod_depto='$idDpto'";
				$validacion = mysqli_query($conexion, $validar);

					$validar2 ="SELECT * FROM departamentos WHERE nombre_depto='$nombreDpto'";
				$validacion2 = mysqli_query($conexion, $validar);


	if (mysqli_num_rows($validacion)<1 && mysqli_num_rows($validacion2)<1) {
				






			


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


	}else {

			die('<div class="alert alert-danger" role="alert"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span>  Error...</strong>  Departamento o Codigo <strong>Ya registrado!</strong></div><script>$("#formDpto")[0].reset();</script>');



	}	


mysqli_close($conexion);
 ?>



