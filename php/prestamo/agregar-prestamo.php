<?php 
include ("/../../conexion/config.php");

			$array_serial 	   = $_POST['serial'];
			$cedula			   = $_POST['cedula'];
			$fecha			   = $_POST['fecha'];


 $consulta_cedula = "SELECT * FROM personal WHERE cedula=$cedula";
 $validar_cedula = mysqli_query($conexion,$consulta_cedula);

if(mysqli_num_rows($validar_cedula)>0){

	//if ($validar_cedula) {
	
	
		$query = "INSERT INTO prestamo_equipo VALUES (NULL,'".$cedula."','".$fecha."',NULL,0)";

		$resultado = mysqli_query($conexion,$query);
		$id= mysqli_insert_id($conexion);
					
				if ($resultado) {


					foreach ($array_serial as $key => $serial) {
							

								$consulta1 = "SELECT * FROM hardware WHERE serial_h='$serial'";
								$validar1 = mysqli_query($conexion,$consulta1);



								$consulta2 = "SELECT * FROM cpu WHERE cod_cpu='$serial'";
								$validar2 = mysqli_query($conexion,$consulta2);

									

									if($validar1 && mysqli_num_rows($validar1)>0){


												$query1 = "INSERT INTO prestamo_hrw VALUES (NULL,'".$id."','".$serial."')";
												$resultado1 = mysqli_query($conexion,$query1);



												$query1_1= "UPDATE hardware SET disponibilidad='1' WHERE serial_h='$serial'";
												$resultado1_1 = mysqli_query($conexion,$query1_1);
								
								}else 

											if ($validar2 && mysqli_num_rows($validar2)>0) {
												

														$query2 = "INSERT INTO prestamo_cpu VALUES (NULL,'".$id."','".$serial."')";
														$resultado2 = mysqli_query($conexion,$query2);


														$query2_1 = "UPDATE cpu SET disponibilidad='1' WHERE cod_cpu='$serial'";
														$resultado2_1 = mysqli_query($conexion,$query2_1);

											}




						}//foreach


				} else {
							die('<div class="alert alert-danger" role="alert"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span>Error!</strong>  hubo un error en los datos <strong>VERIFIQUE SU REGISTRO!</strong></div><script>$("#formPres")[0].reset();</script>');


						}

	



			if($resultado && $validar_cedula) {
			die('<div class="alert alert-success" role="alert"><button class="close" data-dismiss="alert" ><span>&times;</span></button>
											<strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
															<span class="sr-only">Success:</span>En hora buena!</strong>  Su registro ha sido envida con  <strong>EXITO!</strong></div><script>$("#formPres")[0].reset();</script> </div><script>$("#ree")[0].reset();</script> ');
}




}else {

die('<div class="alert alert-danger" role="alert"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span>Error!</strong>  Usuario  <strong>No registrado!</strong></div><script>$("#formPres")[0].reset();</script>');


	


} 





mysqli_close($conexion);

 ?>



