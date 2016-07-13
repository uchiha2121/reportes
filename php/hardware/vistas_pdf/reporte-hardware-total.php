<?php
include(dirname(__FILE__).'/../../../conexion/config.php');
ob_start();


$fechaactual = getdate();


			$consulta = "SELECT * FROM hardware";
			$resultado = mysqli_query($conexion,$consulta);
?>

<style>
<!--

table.clase, table.clase th,  table.clase td {
    border: 1px solid black;
    border-collapse: collapse;
}
   
.contenido {border: 1px solid black}
.tab {border-collapse: collapse;  height: 50px; text-align: center;}
.color {background-color: #6AA8FC; color: #000000;}
.tab2{  height: 40px; width:130px;}
.descripcion { width: 200px;}


-->
</style>


<?php

$numero = mysqli_num_rows($resultado);  
if($numero>0) {
	


?>


 <page backtop="170px" backbottom="170px" backleft="10mm" backright="10mm"> 


	<page_header>
			<div style=" margin-left: 115px; margin-top: 20px; margin-right: 100Px; padding-bottom: 50px">

							
						<table class="page_header">

									<tr>

										<td style="width: 20%"><div style="height: 30%; padding-right: 15px"> <img src="../../../imagenes/logo2.png"></div></td>
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



 	<nobreak>

			 	<page_footer>
						 	<div style="text-align:center">
						 	<h6> Página [[page_cu]]/[[page_nb]]<?php ?><?php ?></h6>
						 	</div>

			 	</page_footer>
 	</nobreak>





		<div style=" text-align:center">


					<h4>Reporte Hardware </h4>

		</div>






		<div style="text-align:right">


		<h6><?php echo "San Cristóbal, $fechaactual[mday]/$fechaactual[mon]/$fechaactual[year]"; ?> </h6>

		</div>




		<table  class="contenido tab">
				<tr>
						<th class="contenido tab2 color">Serial Hardware</th>
						<th class="contenido tab2 color">Nombre Accesorio</th>
						<th class="contenido tab2 color">Descripcion</th>
						<th class="contenido tab2 color">Estado</th>
						
				</tr>


<?php
			

while ($row = mysqli_fetch_array($resultado)) {

					?>

					<tr>

						<td class="contenido descripcion"> <?php echo $row['serial_h']; ?> </td>
						<td class="contenido "> <?php echo $row['nombre_h']; ?>  </td>
						<td class="contenido descripcion"> <?php echo $row['especificacion']; ?>  </td>
						<td class="contenido"><?php if ($row['estado']==0) {echo "Operativo" ;} else {echo "No operativo" ;}?> </td>



					</tr>
<?php

	 }


	 ?>	

		</table>



		<table style=" width: 100%; text-align: center; margin-top:50px">
						<tr>
								<td colspan="2" style=" width: 100%;">
														
														Observaciones:______________________________________________________<br><br>
														____________________________________________________________________<br><br>
														____________________________________________________________________<br><br>
														____________________________________________________________________<br><br>


								</td>
						
						</tr>


						<tr >
						
								<td >
								<br>
								<br>
								<br>
								<br>
								___________________________<br>
								 Jefe Área<br>
								Soporte Técnico<br>
								</td>



								<td>
								<br>
								<br>
								<br>
								<br>
								___________________________<br>
								Jefe Del Departamento<br>
								de TIC<br>


								</td>
						</tr>

		</table>



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