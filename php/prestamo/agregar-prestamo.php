<?php 
include ("/../../conexion/config.php");

			$array_serial 	   = $_POST['serial'];
			$cedula			   = $_POST['cedula'];
			$fecha			   = $_POST['fecha'];


$consulta_cedula = "SELECT * FROM personal WHERE cedula=$cedula";
$validar_cedula = mysqli_query($conexion,$consulta_cedula);

if($validar_cedula){

		$query = "INSERT INTO prestamo_equipo VALUES (NULL,'".$cedula."','".$fecha."',NULL,0)";

		$resultado = mysqli_query($conexion,$query);
		$id= mysqli_insert_id($conexion);
					

		foreach ($array_serial as $key => $serial) {
			

		$consulta1 = "SELECT * FROM hardware WHERE serial_h='$serial'";
		$consulta2 = "SELECT * FROM cpu WHERE cod_cpu='$serial'";


			if($consulta1){


					$query1 = "INSERT INTO prestamo_hrw VALUES (NULL,'".$id."','".$serial."')";
					$resultado1 = mysqli_query($conexion,$query1);



					$query1_1="UPDATE prestamo_hrw SET disponibilidad='1' WHERE serial_h='$serial'";
					$resultado1_1 = mysqli_query($conexion,$query1_1);
		
		}else 

		if ($consulta2) {
			

					$query2 = "INSERT INTO prestamo_cpu VALUES (NULL,'".$id."','".$serial."')";
					$resultado2 = mysqli_query($conexion,$query2);


					$query2_1="UPDATE prestamo_cpu SET disponibilidad='1' WHERE cod_cpu='$serial'";
					$resultado2_1 = mysqli_query($conexion,$query2_1);

		}




		}//foreach




if($resultado) {
die('<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button>
								<strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
												<span class="sr-only">Success:</span>En hora buena!</strong>  Su registro ha sido envida con  <strong>EXITO!</strong></div><script>$("#formPres")[0].reset();</script>');
}



} die('<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="sr-only">Success:</span>Error!</strong>  Usuario  <strong>No registrado!</strong></div><script>$("#formPres")[0].reset();</script>');





mysqli_close($conexion);

 ?>



