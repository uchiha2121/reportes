<?php
include(dirname(__FILE__).'/../../../conexion/config.php');
ob_start();


$fechaactual = getdate();



		$consulta = "SELECT * FROM prestamo_equipo";
		$resultado = mysqli_query($conexion,$consulta);

$consulta1 = "SELECT * FROM prestamo_equipo INNER JOIN personal ON prestamo_equipo.cedula = personal.cedula INNER JOIN departamentos ON departamentos.cod_depto = personal.id_depto";
		$resultado1 = mysqli_query($conexion,$consulta1);



?>

<style>
<!--

h1,h2,h3,h4,h5{
text-align: center;
margin-top: 30px;
margin-bottom: 30px;


}


table.borde, table.borde th, table.borde td, table.borde tr {
border: 1px solid black;
border-collapse: collapse;
width: 85px;
height: 20px;
text-align: center;

 } 

.contenido {}
.tab {  height: 50px;}
th {background-color: #6AA8FC; color: #000000;}
.tab2{  height: 40px; width:150px;}
.descripcion { width: 200px;}



-->
</style>

<?php 
	$numero = mysqli_num_rows($resultado);

			for ($i=0; $i<$numero; $i++)  {

				$row = mysqli_fetch_array($resultado1);

				$id=$row['n_prestamo'];
	?>


<page backtop="150px" backbottom="7mm" backleft="10mm" backright="10mm"> 


				<page_header>

				<div style="margin-left: 115px; margin-top: 20px; margin-right: 100Px">

								
				<table>

				<tr>

					<td style="width: 20%"><div style="height: 30%; padding-right: 20px"> <img src="../../../imagenes/logo2.png"></div></td>
					<td style="width: 50%">
								<div style="text-align: center; width: 100%; padding-top:20px">
								REPUBLICA BOLIVARIANA DE VENEZUELA<br>
								MINISTERIO DEL PODER POPULAR PARA LA DEFENSA<br> 
								UNIVERSIDAD NACIONAL EXPERIMENTAL POLITÉCNICA<br>
								DE LA FUERZA ARMADA NACIONAL BOLIVARIANA<br>
								 UNEFA
								</div>

					</td>
				</tr>



				</table>

				</div>

				</page_header>





<h4>Reporte Prestamo</h4>



<div style="padding-top: 20px; text-align:right">


<h6><?php echo "San Cristobal, $fechaactual[mday]/$fechaactual[mon]/$fechaactual[year]"; ?> </h6>

</div>




		<table class="borde" style="margin-left:10px">
				<tr>
						<th>N°- Prestamo</th>
						<th>Cedula</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Departamento</th>
						<th>Fecha Inicio</th>
						<th>Fecha Fin</th>
						
				</tr>


						<tr>

						<td> <?php echo $row['n_prestamo']; ?> </td>
						<td> <?php echo $row['cedula']; ?> </td>
						<td> <?php echo $row['nombre']; ?> </td>
						<td> <?php echo $row['apellido']; ?> </td>
						<td> <?php echo $row['nombre_depto']; ?> </td>
						<td> <?php echo $row['fecha_inicio']; ?> </td>
						<td> <?php echo $row['fecha_fin']; ?> </td>
						


						</tr>

		</table>








<?php 

$validar_hrw= "SELECT * FROM prestamo_hrw  WHERE id_prestamo='$id'";
$validarcion_hrw = mysqli_query($conexion,$validar_hrw);




if (mysqli_num_rows($validarcion_hrw)>0) {

?>	

<h5>Componentes hardware</h5>


		<table class="borde" style="margin-left:195px">
				<tr>
						<th>N°- Serial 	</th>
						<th>Nombre     	</th>
						<th>Descripcion 	</th>
			   </tr>



<?php
$consulta_h = "SELECT * FROM hardware INNER JOIN prestamo_hrw ON hardware.serial_h = prestamo_hrw.id_serial_h WHERE id_prestamo='$id'";
$resultado_h = mysqli_query($conexion,$consulta_h);

while ($row_h = mysqli_fetch_array($resultado_h)) {
?>

					<tr>

						<td> <?php echo $row_h['serial_h']; ?> 		 </td>
						<td> <?php echo $row_h['nombre_h']; ?>  		 </td>
						<td> <?php echo $row_h['especificacion']; ?>  </td>



					</tr>

	<?php } ?>	


		</table>



<?php }?>	













<?php

$validar_cpu= "SELECT * FROM prestamo_cpu WHERE id_prestamo='$id'";
$validarcion_cpu = mysqli_query($conexion,$validar_cpu);


if (mysqli_num_rows($validarcion_cpu)>0) {

	

			$consulta_cpu = "SELECT * FROM cpu INNER JOIN prestamo_cpu ON cpu.cod_cpu = prestamo_cpu.id_cpu WHERE id_prestamo='$id'";
			$resultado_cpu = mysqli_query($conexion,$consulta_cpu);


while ($row_cpu = mysqli_fetch_array($resultado_cpu)){ 

 ?>	

<h5>Cpu</h5>


		

		<table class="borde" style="margin-left:195px">
				<tr>
						<th>Serial Cpu</th>
						<th>Sistema operativo</th>
						<th>Procedencia</th>
						
				</tr>



					<tr>

						<td> <?php echo $row_cpu['cod_cpu']; ?> </td>
						<td> <?php echo $row_cpu['SO']; ?>  </td>
						<td> <?php echo $row_cpu['procedencia']; ?>  </td>



						</tr>



		</table>








<h5>Caracteristicas Cpu</h5>


		<table  class="borde" style="margin-left:245px">
				<tr>
						<th>Nombre componente</th>
						<th>Descripcion</th>
						
				</tr>


<?php
		$consulta_Tcpu = "SELECT * FROM cpu INNER JOIN prestamo_cpu ON cpu.cod_cpu = prestamo_cpu.id_cpu INNER JOIN caracteristica_cpu ON cpu.cod_cpu=caracteristica_cpu.id_cpu WHERE id_prestamo='$id'";

			$resultado_Tcpu = mysqli_query($conexion,$consulta_Tcpu);

while ($row_comp = mysqli_fetch_array($resultado_Tcpu)) {
?>

					<tr>

						<td> <?php echo $row_comp['nombre_c']; ?> </td>
						<td> <?php echo $row_comp['especificacion']; ?>  </td>
	



						</tr>

	<?php } ?>	


		</table>


<?php 

}
} ?>
<div>
		<table style=" width: 100%; text-align: center; margin-top:60px">
						<tr>
								<td colspan="2" style=" width: 100%;">
														
														Observaciones:______________________________________________________<br><br>
														____________________________________________________________________<br><br>
														____________________________________________________________________<br><br>
						


								</td>
						
						</tr>


						<tr >
						
								<td >
								<br>
								<br>
								___________________________<br>
								 Jefe Área<br>
								Soporte Técnico<br>
								</td>



								<td>
								<br>
								<br>
								___________________________<br>
								Jefe Del Departamento<br>
								de TIC<br>


								</td>
						</tr>

		</table>
</div>







 
 <page_footer><h6 style="text-align:center"> Página <?php echo $i+1; ?> / <?php echo $numero; ?></h6></page_footer>

</page> 





<?php

}
	
?>


<?php
$content =ob_get_clean();
require_once(dirname(__FILE__).'/../../../html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P', 'A4' ,'es', 'UTF-8');
$pdf->writeHTML($content);
//$pdf->pdf->IncludeJs('print(true)');
$pdf->Output('reportee.pdf');

?>