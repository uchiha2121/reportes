<?php 
include ("/../../conexion/config.php");



			$consulta = "SELECT * FROM cpu";
			$resultado = mysqli_query($conexion,$consulta);



printf("<h1>Busqueda Todal</h1>");
if($resultado && mysqli_num_rows($resultado)>0) {


for ($i=0; $i<$numero = mysqli_num_rows($resultado);$i++){
print("<div class='jumbotron'>");
print("<div class='blanco'>");
printf("<h2>Registro N° %s</h2>",$i+1);
$row = mysqli_fetch_array($resultado);

$id=$row['cod_cpu'];

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

	$consulta2 = "SELECT * FROM caracteristica_cpu 	WHERE id_cpu='$id'";
			$resultado2 = mysqli_query($conexion,$consulta2);

while ($row2 = mysqli_fetch_array($resultado2)) {
						
					
					printf("
						<tr>

						<td>%s</td>
						<td>%s</td>


						</tr>


						",$row2['nombre_c'],$row2['especificacion']);


			


					}//wile

 


printf("</table>");







printf("</div>");
printf("</div>");
}

?>


<form method="POST" accept-charset="utf-8" action="php/cpu/vistas_pdf/reporte-cpu-total.php" class="navbar-form navbar-left"  target="_blank" >


								<button type="submit" class="btn btn-info" >Reporte en PDF</button>

					
</form>

</br>
</br>
</br>
</br>

	

<?php
			 
 
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

