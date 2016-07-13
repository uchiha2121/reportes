<?php 
include ("/../../conexion/config.php");


			$n_serial 	     = $_POST['busqueda'];
			$fecha 	         = $_POST['fecha'];

			

$consulta = "UPDATE prestamo_equipo SET fecha_fin='$fecha', estado='1' WHERE n_prestamo='$n_serial'";

$resultado2 = mysqli_query($conexion, $consulta);



	$consulta_h = "SELECT * FROM hardware INNER JOIN prestamo_hrw ON hardware.serial_h = prestamo_hrw.id_serial_h WHERE id_prestamo='$n_serial'";
		$resultado_h = mysqli_query($conexion,$consulta_h);


		if ($num=mysqli_num_rows($resultado_h)>0) {


			while ($row=mysqli_fetch_array($resultado_h)) {

				$var = $row['serial_h'];
				

			
			$con = "UPDATE hardware INNER JOIN prestamo_hrw ON hardware.serial_h = prestamo_hrw.id_serial_h SET disponibilidad='0' WHERE id_prestamo='$n_serial' AND serial_h='$var' ";

					$resultado = mysqli_query($conexion, $con);
}



		}




	$consulta_cpu = "SELECT * FROM cpu INNER JOIN prestamo_cpu ON cpu.cod_cpu = prestamo_cpu.id_cpu WHERE id_prestamo='$n_serial'";
			$resultado_cpu = mysqli_query($conexion,$consulta_cpu);


		if ($num=mysqli_num_rows($resultado_cpu)>0) {


			while ($row=mysqli_fetch_array($resultado_cpu)) {

				$var = $row['cod_cpu'];

			
$con2 = "UPDATE  cpu INNER JOIN prestamo_cpu ON cpu.cod_cpu = prestamo_cpu.id_cpu SET disponibilidad='0' WHERE id_prestamo='$n_serial' AND cod_cpu='$var' ";

					$resultado = mysqli_query($conexion, $con2);
		}



		}




if($resultado2) {
					die(

'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> El proceso de Baja a sido <strong>EXITOSA!</strong></div>'
					);



}else{

		die (

		'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Se a producido un Error al eliminarlo </div>'

			);


};





mysqli_close($conexion);
 ?>



