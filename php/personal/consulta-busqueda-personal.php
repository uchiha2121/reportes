<?php 
include ("/../../conexion/config.php");


			$busqueda = $_POST['busqueda'];


			$consulta = "SELECT personal.cedula, personal.nombre, personal.apellido, personal.telefono, departamentos.nombre_depto FROM `personal` INNER JOIN depto_pers on personal.cedula = depto_pers.id_cedula INNER JOIN departamentos on depto_pers.id_depto = departamentos.cod_depto WHERE cedula= '$busqueda' ";
			$resultado = mysqli_query($conexion,$consulta);


printf("<h1>Busqueda Avanzada</h1>");
if($resultado  && mysqli_num_rows($resultado)>0) {
	
$row = mysqli_fetch_array($resultado);

	printf("				
	<table id='Tabla' class='table table-bordered'>
				<tr class='tabla-principal'>
						<td>Cedula</td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>telefono</td>
						<td>Departamento</td>
						
				</tr>

");



						
					
					printf("
						<tr>

						<td>%s</td>
						<td>%s</td>
						<td>%s</td>
						<td>%s</td>
						<td>%s</td>


						</tr>


						",$row['cedula'],$row['nombre'],$row['apellido'],$row['telefono'],$row['nombre_depto']);



printf("</table>");


	


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

