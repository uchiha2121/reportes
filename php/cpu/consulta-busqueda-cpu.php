<?php 
include ("/../../conexion/config.php");


			$busqueda = $_POST['busqueda'];


			$consulta = "SELECT * FROM cpu WHERE cod_cpu = '$busqueda' ";
			$resultado = mysqli_query($conexion,$consulta);



	$consulta2 = "SELECT * FROM caracteristica_cpu WHERE id_cpu = '$busqueda' ";
	$resultado2 = mysqli_query($conexion,$consulta2);

printf("<h1>Busqueda Avanzada</h1>");
if($resultado  && mysqli_num_rows($resultado)>0) {
	
$row = mysqli_fetch_array($resultado);
print("<div class='jumbotron'>");
print("<div class='blanco'>");
	printf("				
	<table id='Tabla' class='table table-bordered'>
				<tr class='tabla-principal'>
						<td>Serial Cpu</td>
						<td>Sistema Operativo</td>
						<td>Procedencia</td>
						
				</tr>

");



						
					
					printf("
						<tr>

						<td>%s</td>
						<td>%s</td>
						<td>%s</td>


						</tr>


						",$row['cod_cpu'],$row['SO'],$row['procedencia']);



printf("</table>");


	


	printf("				
	<table id='Tabla2' class='table table-bordered'>
				<tr class='info'>
						<td>Nombre componente</td>
						<td>Descripcion</td>
						
				</tr>

");


while ($row2 = mysqli_fetch_array($resultado2)) {
						
					
					printf("
						<tr>

						<td>%s</td>
						<td>%s</td>


						</tr>


						",$row2['nombre_c'],$row2['especificacion']);


			


					}//wile

				mysqli_free_result($resultado2); 
 


printf("</table>");

printf("</div>");
printf("</div>");
die(

'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Registro encontrado con <strong>EXITO!</strong></div>'
								

	);


} 




else {


	die (

'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> No se encontraron registros </div>'

);
}


mysqli_close($conexion);
 ?>

