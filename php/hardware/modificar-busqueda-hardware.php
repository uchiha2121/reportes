<?php 
include ("/../../conexion/config.php");


			
			$busqueda = $_POST['busqueda'];


			$consulta = "SELECT * FROM hardware WHERE serial_h = '$busqueda' AND disponibilidad='0' AND estado='0'";


			$resultado = mysqli_query($conexion,$consulta);

			mysqli_data_seek ($resultado, 0);

$row = mysqli_fetch_array($resultado);


if($resultado && ($contador=mysqli_num_rows($resultado))>0) {
?>	
 	<form id="formEdHrw" class='form-horizontal formEdHrw' method="POST" accept-charset="utf-8" >



<table class='table table-bordered'>


<tr>
						<td>Serial Hardware</td>
						<td>Nombre Accesorio</td>
						<td>Descripcion</td>
						<td>Estado</td>
						
				</tr>

<tr>

<td><input type='text' name='idhardware' class='form-control'  id='disabledTextInput' value='<?php  echo $row['serial_h']?>' disabled ></td>
<input type='hidden' name='codHarw' value='<?php    echo $row['serial_h']  ?>' >

<td><input type='text' name='Ncomponente' class='form-control' id='disabledTextInput' value="<?php    echo $row['nombre_h'] ?>" disabled ></td>


<td><input type='text' name='HDescrip' class='form-control' required   maxlength="50" minlength="10"  value='<?php    echo $row['especificacion']  ?>' ></td>




<td>
							<select name='Estado' class="form-control" required>
							
							<option value="">Seleccion</option> 
							<option value="0" <?php if($row['estado'] == '0'){echo 'selected';} ?> >Operativo</option>
							<option value="1" <?php if($row['estado'] == '1'){echo 'selected';} ?> >No Operativo</option>  
										   
										   
									 </select>
						</td>
</tr>




</table>


				 
 <p><input type='submit' id='BtnHrw' name='Btn' value='Modificar' class='btn btn-success'></p>


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
		url: "php/hardware/modificar-agregar-hardware.php",
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

