<?php 
require_once '/../../conexion/config.php';
		
			$busqueda = $_POST['busqueda'];

		$consulta = "SELECT * FROM prestamo_equipo WHERE n_prestamo='$busqueda'";
		$resultado = mysqli_query($conexion,$consulta);



		$consulta1 = "SELECT * FROM prestamo_equipo INNER JOIN personal ON prestamo_equipo.cedula = personal.cedula INNER JOIN departamentos ON departamentos.cod_depto = personal.id_depto WHERE n_prestamo='$busqueda'";
		$resultado1 = mysqli_query($conexion,$consulta1);
		


if(mysqli_num_rows($resultado)>0) {

$row = mysqli_fetch_array($resultado1);
		$id=$busqueda;

	
?>	








<h2>Infomacion del prestamo</h2>


 <form id="formEdHrw" class='form-horizontal formEdHrw' method="POST" accept-charset="utf-8" >






		      											               <!-- tabla informacion del prestamista-->

<div>
	<table class='table table-bordered'>
						    <thead>
						        <tr class='tabla-principal'>
						            <th>N°- Prestamo</th>
						            <th>Cedula</th>
						            <th>Nombre</th>
						            <th>Apellido</th>
						            <th>Departamento</th>
						        </tr>
						    </thead>

						    <tbody>
	
						        <tr>
						        	<td><?php echo $row['n_prestamo'];?></td>
						        	<input type="hidden" name="nPrestamo" value="<?php echo $row['n_prestamo'];?>">
						        	<td><?php echo $row['cedula'];?></td>
						            <td><?php echo $row['nombre'];?></td>
						            <td><?php echo $row['apellido'];?></td>
						            <td><?php echo $row['nombre_depto'];?></td>
						           
						        </tr>
						    </tbody>
		</table>

</div>



<h3>Detalles del prestamo</h3>

<div class="row">
	

	<table class='table table-bordered'>

<?php

$validar_hrw= "SELECT * FROM prestamo_hrw  WHERE id_prestamo='$id'";
$validarcion_hrw = mysqli_query($conexion,$validar_hrw);
?>
						    <thead>
						        <tr class='tabla-principal'>
						            <th>nombre</th>
						            <th>Descripci&oacute;n</th>
						            <th></th>
						        </tr>
						    </thead>

						    	<?php
if (mysqli_num_rows($validarcion_hrw)>0) {
	?>



						    									<!-- tabla hardware-->

						    <tbody>
						    	<?php
							$consulta_h = "SELECT * FROM hardware INNER JOIN prestamo_hrw ON hardware.serial_h = prestamo_hrw.id_serial_h WHERE id_prestamo='$id'";
							$resultado_h = mysqli_query($conexion,$consulta_h);


							while ($row_h = mysqli_fetch_array($resultado_h)) {



						
						    	?>
						    	<input type="hidden" name="serial_hDelete[]" value="<?php echo $row_h['serial_h'];?>">
						        <tr>
						        	<td><?php echo $row_h['nombre_h'];?></td>
						        		<input type="hidden" name="serial_hOn[]" value="<?php echo $row_h['serial_h'];?>">

						            <td><?php echo $row_h['especificacion'];?></td>
						            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" >Eliminar</button></td>
						        </tr>
						        <?php }?> 
						    </tbody>

 <?php }?> 


																	<!-- tabla cpu-->

<?php

$validar_cpu= "SELECT * FROM prestamo_cpu WHERE id_prestamo='$id'";
$validarcion_cpu = mysqli_query($conexion,$validar_cpu);


if (mysqli_num_rows($validarcion_cpu)>0) {
	?>

						    	<tbody>
						    	<?php 



						    	$consulta_cpu = "SELECT * FROM cpu INNER JOIN prestamo_cpu ON cpu.cod_cpu = prestamo_cpu.id_cpu WHERE id_prestamo='$id'";
								$resultado_cpu = mysqli_query($conexion,$consulta_cpu);

						    	$row_cpu = mysqli_fetch_array($resultado_cpu);
						    	?>
						    	<input type="hidden" name="serial_cpuDelete[]" value="<?php echo $row_cpu['cod_cpu'];?>">
						        <tr>
						        	<td><?php echo $row_cpu['cod_cpu'];?></td>
						       			 <input type="hidden" name="serial_cpuOn[]" value="<?php echo $row_cpu['cod_cpu'];?>">

						            <td><?php echo $row_cpu['SO'];?></td>
						            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" >Eliminar</button></td>
						        </tr>

						    </tbody>


		<?php }?> 			    
						</table>


</div>


					<p><input type="submit" id="BtnCpu" name="enviar_btn" value="Modificar" class="btn btn-success"><o>
		

</form>



<script src="js/jquery-2.2.3.min.js"></script>
<script>
	
	$(document).on('ready',funcAjaxx);

	function funcAjaxx (){

$(".formEdHrw").on("submit", function(e){
	
	//Evitamos que se envíe por defecto
	e.preventDefault();
	//Creamos un FormData con los datos del mismo formulario
	var formData = new FormData(this);

	//Llamamos a la función AJAX de jQuery
	$.ajax({
		//Definimos la URL del archivo al cual vamos a enviar los datos
		url: "php/prestamo/modificar-agregar-modificacion-prestamo.php",
		//Definimos el tipo de método de envío
		type: "POST",
		//Definimos el tipo de datos que vamos a enviar y recibir
		dataType: "HTML",
		//Definimos la información que vamos a enviar
		data: formData,
		//Deshabilitamos el caché
		cache: false,
		//No especificamos el contentType
		contentType: false,
		//No permitimos que los datos pasen como un objeto
		processData: false


	}).done(function(data){
		//Cuando recibamos respuesta, la mostramos
		
		mensaje.html(data);
		mensaje.slideDown(500); });
}

);

	}
</script>


<?php



die(

'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Registro encontrado con <strong>EXITO!</strong></div>'
								

	);

mysqli_free_result($resultado);
} else {


	die (

'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> No se encontraron registros!!! </div>'

);
}


mysqli_close($conexion);
 ?>

