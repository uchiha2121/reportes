<?php 
include ("/../../conexion/config.php");

			$cedula			   = $_POST['cedula'];
			$nombre			   = $_POST['nombre'];
			$apellido		   = $_POST['apellido'];
			$telefono1		   = $_POST['telefono'];


			$consulta1 = "INSERT personal VALUES ('".$cedula."','".$nombre."','".$apellido."','".$telefono1."')";

			$resultado1 = mysqli_query($conexion,$consulta1);

 			//se agrega la talba departamentos-personal

			$departamento	  = $_POST['dpto'];

			$query = "SELECT cod_depto FROM departamentos WHERE nombre_depto = '$departamento' ";

			$result =  mysqli_query($conexion, $query) ;

					   mysqli_data_seek ($result, 0);
			$extraido= mysqli_fetch_array($result);

			$idDpto = $extraido['cod_depto'];

			$consulta2 = "INSERT depto_pers VALUES (null,'".$cedula."','".$idDpto."')";

			//mysqli_free_result($query);
			$resultado2 = mysqli_query($conexion,$consulta2);

if($resultado1 && $resultado2) {
					die(

								'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button>
								<strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
												<span class="sr-only">Success:</span>En hora buena! </strong> Su registro ha sido envida con <strong>EXITO!</strong></div>

								<script>$("#formPersonal")[0].reset();</script>'
					);



}





mysqli_close($conexion);

 ?>



