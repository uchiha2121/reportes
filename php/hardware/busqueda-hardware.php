<?php 
include ("/../../conexion/config.php");


			$busqueda = $_POST['busqueda'];


			$consulta = "SELECT * FROM hardware WHERE serial_h = '$busqueda' ";


			$resultado = mysqli_query($conexion,$consulta);

			mysqli_data_seek ($resultado, 0);




 ?>

 	<table id="TablaAgregadora2" class="table table-bordered">
				<tr>
						<td>Serial Hardware</td>
						<td>Nombre Accesorio</td>
						<td>Descripcion</td>
						
				</tr>


				<?php 




$row = mysqli_fetch_array($resultado);

echo " ".$row['serial_h']." ";

echo "".$row['h_nombre']." ";
echo "".$row['especificacion']."";


					// while ($row = mysqli_fetch_array($resultado)) {
						
					
					// printf("
					// 	<tr>

					// 	<td>%s</td>
					// 	<td>%s</td>
					// 	<td>%s</td>


					// 	</tr>


					// 	", $row['serial_h'], $row['h_nombre'], $row['especificacion']);


					// }//wile

				mysqli_free_result($resultado); 
 
				mysqli_close($conexion); 

				 ?>







	</table> 