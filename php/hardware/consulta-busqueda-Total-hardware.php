<?php 
include ("/../../conexion/config.php");


			$consulta = "SELECT * FROM hardware";
			$resultado = mysqli_query($conexion,$consulta);

			mysqli_data_seek ($resultado, 0);



if($resultado && ($contador=mysqli_num_rows($resultado))!=0) {
	$n=1;
	$operatividad;
	printf("				
	<table  id='Tabla' class='table table-bordered'>
				<tr class='tabla-principal'>
						<td>Nro</td>
						<td>Serial Hardware</td>
						<td>Nombre Accesorio</td>
						<td>Descripcion</td>
						<td>Estado</td>		
				</tr>

");


while ($row = mysqli_fetch_array($resultado)) {
	?>
										
<?php if($row['estado'] == '0'){$operatividad='opertativo';} else{$operatividad='no operativo';} ?>

			
					

<?php 
									
					
					printf("
						<tr>
							<td>%s</td>
							<td>%s</td>
							<td>%s</td>
							<td>%s</td>
							<td>%s</td>
							
					</tr>


						",$n,$row['serial_h'],$row['nombre_h'],$row['especificacion'],$operatividad);


			

					$n++;
					}//wile

				mysqli_free_result($resultado); 
 


printf("</table>");


?>


<form method="POST" accept-charset="utf-8" action="php/hardware/vistas_pdf/reporte-hardware-total.php" class="navbar-form navbar-left"  target="_blank" >


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

