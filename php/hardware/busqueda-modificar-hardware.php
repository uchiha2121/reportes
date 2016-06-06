<?php 
include ("/../../conexion/config.php");

			$value    = "value=''";
			$busqueda = $_POST['busqueda'];


			$consulta = "SELECT * FROM hardware WHERE serial_h = '$busqueda' ";


			$resultado = mysqli_query($conexion,$consulta);

			mysqli_data_seek ($resultado, 0);



if($resultado && ($contador=mysqli_num_rows($resultado))!=0) {
	$row = mysqli_fetch_array($resultado);

	printf("<form name='Validar_Get' id='formEdHrw' class='form-horizontal' method='POST' accept-charset='utf-8' value='' >");



printf("<table class='table table-bordered'>");


printf("<tr>
						<td>Serial Hardware</td>
						<td>Nombre Accesorio</td>
						<td>Descripcion</td>
						
				</tr>");

printf("<tr>");

printf("<td><input type='text' name='idhardware' class='form-control'  id='disabledTextInput' value='%s' disabled></td>",$row['serial_h']);
printf("<input type='hidden' name='codHarw' value='%s' >",$row['serial_h']);

printf("<td><input type='text' name='Ncomponente' class='form-control' id='disabledTextInput' value='%s' disabled></td>",$row['h_nombre']);
printf("<input type='hidden' name='Componente'  value='%s' >",$row['h_nombre']);

printf("<td><input type='text' name='HDescrip' class='form-control' value='%s' ></td>",$row['especificacion']);


printf("</tr>");




printf("</table>");


				 
 printf("<p><input type='submit' id='BtnHrw' name='Btn' value='Modificar' class='btn btn-success'></p>");


printf("</form>");

mysqli_free_result($resultado);
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

