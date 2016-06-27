<?php 
include ("/../../conexion/config.php");


			$consulta = "SELECT * FROM hardware WHERE disponibilidad=1 AND estado=0";


			$resultado = mysqli_query($conexion,$consulta);

			mysqli_data_seek ($resultado, 0);



if($resultado && ($contador=mysqli_num_rows($resultado))>0) {
	$n=1;

	printf("				
	<table id='TablaAgregadora2' class='table table-bordered'>
				<tr>
						<td>Nro</td>
						<td>Serial Hardware</td>
						<td>Nombre Accesorio</td>
						<td>Descripcion</td>		
				</tr>

");


while ($row = mysqli_fetch_array($resultado)) {
						
					
					printf("
						<tr>
							<td>%s</td>
							<td>%s</td>
							<td>%s</td>
							<td>%s</td>
						</tr>


						",$n,$row['serial_h'],$row['h_nombre'],$row['especificacion']);


			

					$n++;
					}//wile

				mysqli_free_result($resultado); 
 


printf("</table>");


die(

'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Registros encontrado con <strong>EXITO!</strong></div>'
								

	);


} 




else {


	die (

'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> No se encontraron registros </div>'

);
}


mysqli_close($conexion);
 ?>

