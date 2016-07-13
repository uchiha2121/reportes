<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
include ("/../../conexion/config.php");


			$n_prestamo	           = $_POST['nPrestamo'];

			$Array_serialDelete_h 	   = isset($_POST['serial_hDelete']) ? $_POST['serial_hDelete']: NULL;
			$Array_serialOn_h 	       = isset($_POST['serial_hOn']) ? $_POST['serial_hOn']: NULL;

			$Array_serialDelete_cpu      = isset($_POST['serial_cpuDelete']) ? $_POST['serial_cpuDelete']: NULL;
			$Array_serialOn_cpu          = isset($_POST['serial_cpuOn']) ? $_POST['serial_cpuOn']: NULL;

			$vandera=0;






if ($Array_serialOn_h==NULL && $Array_serialOn_cpu==NULL) {


		die (

		'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong>No puede eliminar todos los componentes del prestamo</div>'

			);






} else {



if ($Array_serialDelete_h) {

	foreach ($Array_serialDelete_h as $key => $serialDelete_h) {
				$serialOn_h	=	$Array_serialOn_h[$key];

				if ($serialOn_h==NULL) { //harwdare
									
					$consulta_h = "SELECT * FROM hardware INNER JOIN prestamo_hrw ON hardware.serial_h = prestamo_hrw.id_serial_h WHERE serial_h='$serialDelete_h'";
					$resultado_h = mysqli_query($conexion,$consulta_h);

						if ($num=mysqli_num_rows($resultado_h)>0) { //harwdare
									
								$modificar="UPDATE hardware SET disponibilidad='0' WHERE serial_h='$serialDelete_h'";
								$res1 = mysqli_query($conexion,$modificar);


								$borrar= "DELETE FROM prestamo_hrw WHERE id_serial_h='$serialDelete_h'";
								$resultado_borr = mysqli_query($conexion,$borrar);

					           
									

					               $vandera++; 
					         
							}


					}

	}
	

}







if ($Array_serialDelete_cpu) {


foreach ($Array_serialDelete_cpu as $key1 => $serialDelete_cpu) {

		$serialOn_cpu = $Array_serialOn_cpu[$key1];

					if ($serialOn_cpu===NULL) {



		$consulta_cpu = "SELECT * FROM cpu INNER JOIN prestamo_cpu ON cpu.cod_cpu = prestamo_cpu.id_cpu WHERE cod_cpu='$serialDelete_cpu'";
		$resultado_cpu = mysqli_query($conexion,$consulta_cpu);


					if ($num=mysqli_num_rows($resultado_cpu)>0) { //cpu
								

								$modificar2="UPDATE cpu SET disponibilidad='0' WHERE cod_cpu='$serialDelete_cpu'";
								$res2 = mysqli_query($conexion,$modificar2);

								$borrar= "DELETE FROM prestamo_cpu WHERE id_cpu='$serialDelete_cpu'";
								$resultado_bor = mysqli_query($conexion,$borrar);
	


						

							            $vandera++;
				






					}	 
			}


}
}











			if ($vandera==0) {

									die (

				'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> No se a modificado ninguna consulta</div>'

						);



			}
			

					








					die(

'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Su modificacion fue <strong>EXITOSA!</strong></div>'
					);



}



 



mysqli_close($conexion);
 ?>



