

<?php 
include ("/../../conexion/config.php");



		$consulta = "SELECT * FROM departamentos ORDER BY cod_depto";
			$resultado = mysqli_query($conexion,$consulta);


printf("<h1>Busqueda Total</h1>");
if($resultado  && mysqli_num_rows($resultado)>0) {
	$n=1;


	printf("				
	<table id='Tabla' class='table table-bordered'>
				<tr class='tabla-principal'>
						<td>Nro</td>
						<td>codigo departamento</td>
						<td>Nombre departamento</td>

						
				</tr>

");


while ($row = mysqli_fetch_array($resultado)) {


						
					
					printf("
						<tr>

						<td>%s</td>
						<td>%s</td>
						<td>%s</td>



						</tr>


						",$n,$row['cod_depto'],$row['nombre_depto']);
$n++;
}

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

