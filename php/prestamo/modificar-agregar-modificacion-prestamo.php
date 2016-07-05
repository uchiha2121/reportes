<?php 
include ("/../../conexion/config.php");


			$n_prestamo	           = $_POST['nPrestamo'];

			$Array_serialDelete_h 	   = isset($_POST['serial_hDelete']) ? $_POST['serial_hDelete']: null;
			$Array_serialOn_h 	       = isset($_POST['serial_hOn']) ? $_POST['serial_hOn']: null;

			$Array_serialDelete_cpu      = isset($_POST['serial_cpuDelete']) ? $_POST['serial_cpuDelete']: null;
			$Array_serialOn_cpu          = isset($_POST['serial_cpuOn']) ? $_POST['serial_cpuOn']: null;

			$vandera=0;






if ($Array_serialOn_h==null && $Array_serialOn_cpu==null) {


		die (

		'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong>No puede eliminar todos los componentes del prestamo</div>'

			);






} else {





	foreach ($Array_serialDelete_h as $key => $serialDelete_h) {
				$serialOn_h	=	$Array_serialOn_h[$key];

				if ($serialOn_h==null) { //harwdare
									
					$consulta_h = "SELECT * FROM hardware INNER JOIN prestamo_hrw ON hardware.serial_h = prestamo_hrw.id_serial_h WHERE id_prestamo='$serialDelete_h'";
					$resultado_h = mysqli_query($conexion,$consulta_h);

						if ($resultado_h) { //harwdare
									





					                 echo "modifique hrw";
									

					               $vandera++; 
					               echo "vandera= $vandera";
							}


					}

	}
	









foreach ($Array_serialDelete_cpu as $key1 => $serialDelete_cpu) {

		$serialOn_cpu = $Array_serialOn_cpu[$key1];

					if ($serialOn_cpu===NULL) {



						$consulta_cpu = "SELECT * FROM cpu INNER JOIN prestamo_cpu ON cpu.cod_cpu = prestamo_cpu.id_cpu WHERE id_prestamo='$serialDelete_cpu'";
						$resultado_cpu = mysqli_query($conexion,$consulta_cpu);


					if ($resultado_cpu) { //cpu
								




										echo "modifique cpu";
										echo "vandera= $vandera";






							$vandera++;
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



