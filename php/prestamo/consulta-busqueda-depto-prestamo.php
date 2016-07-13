<?php 

include ("/../../conexion/config.php");

		$busqueda = $_POST['dpto'];



		$consulta1 = "SELECT * FROM prestamo_equipo INNER JOIN personal ON prestamo_equipo.cedula = personal.cedula INNER JOIN departamentos ON departamentos.cod_depto = personal.id_depto WHERE personal.id_depto=$busqueda";
		$resultado1 = mysqli_query($conexion,$consulta1);


printf("<h1>Busqueda Avanzada</h1> </br>");
if(mysqli_num_rows($resultado1)>0) {
	


for ($i=0; $i<$numero = mysqli_num_rows($resultado1);$i++){
	$n=$i+1;
printf("<h1>Registro N°- $n</h1> </br>");
$row = mysqli_fetch_array($resultado1);

$id=$row['n_prestamo'];

print("<div class='jumbotron'>");
print("<div class='blanco'>");
	printf("				
	<table id='Tabla' class='table table-bordered'>
				<tr class='tabla-principal'>
						<td>N°- Prestamo</td>
						<td>Cedula</td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>Departamento</td>
						<td>Fecha Inicio</td>
						<td>Fecha Fin</td>

						
				</tr>

");




						
					
					printf("
						<tr>

						<td>%s</td>
						<td>%s</td>
						<td>%s</td>
						<td>%s</td>
						<td>%s</td>
						<td>%s</td>
						<td>%s</td>


						</tr>


						",$row['n_prestamo'],$row['cedula'],$row['nombre'],$row['apellido'],$row['nombre_depto'],$row['fecha_inicio'],$row['fecha_fin']);



printf("</table>");


	


$validar_hrw= "SELECT * FROM prestamo_hrw  WHERE id_prestamo='$id'";
$validarcion_hrw = mysqli_query($conexion,$validar_hrw);


if (mysqli_num_rows($validarcion_hrw)>0) {

printf("<h3>Componentes hardware</h3>");
	printf("				
	<table id='Tabla2' class='table table-bordered'>
				<tr class='info'>
						<td>N°- Serial</td>
						<td>Nombre</td>
						<td>Descripcion</td>
						
				</tr>

");

			$consulta_h = "SELECT * FROM hardware INNER JOIN prestamo_hrw ON hardware.serial_h = prestamo_hrw.id_serial_h WHERE id_prestamo='$id'";
			$resultado_h = mysqli_query($conexion,$consulta_h);

while ($row_h = mysqli_fetch_array($resultado_h)) {
						
					
					printf("
						<tr>

						<td>%s</td>
						<td>%s</td>
						<td>%s</td>


						</tr>


						",$row_h['serial_h'],$row_h['nombre_h'],$row_h['especificacion']);


			


					}//wile

 


printf("</table>");



}// if HARDWARE










$validar_cpu= "SELECT * FROM prestamo_cpu WHERE id_prestamo='$id'";
$validarcion_cpu = mysqli_query($conexion,$validar_cpu);


if (mysqli_num_rows($validarcion_cpu)>0) {

	

			$consulta_cpu = "SELECT * FROM cpu INNER JOIN prestamo_cpu ON cpu.cod_cpu = prestamo_cpu.id_cpu WHERE id_prestamo='$id'";
			$resultado_cpu = mysqli_query($conexion,$consulta_cpu);


while ($row_cpu = mysqli_fetch_array($resultado_cpu)){ 

printf("<h3>Cpu</h3>");



	printf("				
	<table id='Tabla2' class='table table-bordered'>
				<tr class='info'>
						<td>Serial Cpu</td>
						<td>Sistema operativo</td>
						<td>Procedencia</td>
						
				</tr>

");

	printf("
						<tr>

						<td>%s</td>
						<td>%s</td>
						<td>%s</td>


						</tr>


						",$row_cpu['cod_cpu'],$row_cpu['SO'],$row_cpu['procedencia']);

	printf("</table>");

	$consulta_Tcpu = "SELECT * FROM cpu INNER JOIN prestamo_cpu ON cpu.cod_cpu = prestamo_cpu.id_cpu INNER JOIN caracteristica_cpu ON cpu.cod_cpu=caracteristica_cpu.id_cpu 	WHERE id_prestamo='$id'";

	$resultado_Tcpu = mysqli_query($conexion,$consulta_Tcpu);


printf("<h3>Componentes Cpu</h3>");

	printf("				
	<table id='Tabla2' class='table table-bordered'>
				<tr class='info'>
						<td>Nombre componente</td>
						<td>Descripcion</td>
						
				</tr>

");
while ($row_comp = mysqli_fetch_array($resultado_Tcpu)) {
						
					
					printf("
						<tr>

						<td>%s</td>
						<td>%s</td>


						</tr>


						",$row_comp['nombre_c'],$row_comp['especificacion']);


			


					}//wile

 


printf("</table>");

}





}// if cpu


printf("</div>");
printf("</div>");
}//for


?>


<form method="POST" accept-charset="utf-8" action="php/prestamo/vistas_pdf/reporte-prestamo-depto.php" class="navbar-form navbar-left"  target="_blank" >


					<input type="hidden" name="busqueda" value="<?php echo $busqueda?>" >

								<button type="submit" class="btn btn-info" >Reporte en PDF</button>

					
</form>

</br>
</br>
</br>
</br>

	

<?php



die(

'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Registro encontrado con <strong>EXITO!</strong></div>'
								

	);

}//if validacion
else {

die (

'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> No se encontraron registros </div>'

);


}


mysqli_close($conexion);
 ?>

