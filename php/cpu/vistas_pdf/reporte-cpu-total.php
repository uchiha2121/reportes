<?php
include(dirname(__FILE__).'/../../../conexion/config.php');
ob_start();


$fechaactual = getdate();




			$consulta = "SELECT * FROM cpu";
			$resultado = mysqli_query($conexion,$consulta);
?>

<style>
<!--

   
.contenido {border: 1px solid black}
.tab {border-collapse: collapse;  height: 50px;}
.color {background-color: #6AA8FC; color: #000000;}
.tab2{  height: 40px; width:150px;}
.descripcion { width: 200px;}



-->
</style>
<?php  
if($resultado && mysqli_num_rows($resultado)>0) {
	$numero = mysqli_num_rows($resultado);
for ($i=0; $i<$numero;$i++){
$row = mysqli_fetch_array($resultado);

$id=$row['cod_cpu'];
?>


 <page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm"> 
<page_header>
<div style=" margin-left: 125px; margin-top: 20px; margin-right: 100Px">

				
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






<div style="padding-top: 130px; text-align:center">


<h4>Reporte Cpu </h4>

</div>

<div style="padding-top: 20px; text-align:right">


<h6><?php echo "San Cristobal, $fechaactual[mday]/$fechaactual[mon]/$fechaactual[year]"; ?> </h6>

</div>







<div id="contenido" style="padding-top: 20px; text-align:center;  margin-left: 50px">
		<table class="contenido tab">
				<tr>
						<th class="contenido tab2 color">Serial Cpu</th>
						<th class="contenido tab2 color">Sistema Operativo</th>
						<th class="contenido tab2 color">Procedencia</th>
						<th class="contenido tab2 color">Estado</th>
						
				</tr>


						<tr >

						<td class="contenido"><?php echo $row['cod_cpu']; ?> </td>
						<td class="contenido"><?php echo $row['SO']; ?> </td>
						<td class="contenido"><?php echo $row['procedencia']; ?> </td>
						<td class="contenido"><?php if ($row['estado']==0) {echo "Disponible" ;} else {echo "No operativo" ;}?> </td>


						</tr>

		</table>

</div>





<div style="padding-top: 30px; text-align:center; margin-left: 150px">
		<table  class="contenido tab">
				<tr>
						<th class="contenido tab2 color descripcion">Nombre componente</th>
						<th class="contenido tab2 color descripcion">Descripcion</th>
						
				</tr>


<?php
	$consulta2 = "SELECT * FROM caracteristica_cpu 	WHERE id_cpu='$id'";
			$resultado2 = mysqli_query($conexion,$consulta2);

while ($row2 = mysqli_fetch_array($resultado2)) {
?>

					<tr>

						<td class="contenido descripcion"> <?php echo $row2['nombre_c']; ?> </td>
						<td class="contenido descripcion"> <?php echo $row2['especificacion']; ?>  </td>



						</tr>

	<?php }?>	


		</table>

</div>






<div style="padding-top: 30px; margin-left: 80px"> 

<table>

<tr>

	<td style="width: 50%">
				<div style="text-align: center; width: 100%; padding-top:20px">
				Observaciones:______________________________________________________<br><br>
				____________________________________________________________________<br><br>
				____________________________________________________________________<br><br>
				____________________________________________________________________

				</div>

	</td>
</tr>



</table>

</div >







<div style="padding-top: 70px; margin-left: 70px">
	
	



<table>
<tr>
	
<td>
	<div style="margin-left: 50px">___________________________</div>
	 <div style="margin-left: 115px"> Jefe Área</div>
	 <div style="margin-left: 100px">Soporte Técnico</div>



</td>
<td></td>
<td>
	

	<div style="margin-left: 50px">___________________________</div>
	 <div style="margin-left: 80px">Jefe Del Departamento</div>
	 <div style="margin-left: 130px">de TIC</div>




</td>


</tr>


 </table>
</div>




 
 <page_footer><div style="text-align:center"><h6> Página <?php echo $i+1; ?> / <?php echo $numero; ?></h6></div></page_footer>
</page>
 <?php 
}

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