<?php 
include ("/../../conexion/config.php");


			
			$busqueda = $_POST['busqueda'];


			$consulta = "SELECT * FROM cpu WHERE cod_cpu = '$busqueda' AND estado='0'";
			$resultado = mysqli_query($conexion,$consulta);





if($resultado && mysqli_num_rows($resultado)>0) {
$row = mysqli_fetch_array($resultado);

$id = $row['cod_cpu'];
?>	





<form name="Validar_Get" id="formModCpuB" class="form-horizontal formModCpuB" method="POST" accept-charset="utf-8">
	
		<div class="form-group" >
			




 				<label for="code" class="control-label">Codigo Case: </label>
  				<input type="text"  class="form-control"  id="code"  value="<?php    echo $row['cod_cpu']  ?>" disabled >
  				<input type="hidden" name="codPresCpu" class="form-control" value="<?php    echo $row['cod_cpu']  ?>" >

  				<label for="proce" class="control-label">Procedencia del equipo: </label>
  				<input type="text" id="proce" name="ProCpu" class="form-control" placeholder="¿De donde proviene el equipo?" value="<?php    echo $row['procedencia']  ?>" maxlength="30" minlength="3" disabled >


				<label for="SistemaO" class="control-label">Sistema Operativo: </label>
								
										<select id="SistemaO" name="SistemaO" class="form-control" disabled >
											   <option value="">Elije Una opcion</option> 
											   <option value="windows" <?php if($row['SO'] == 'windows'){echo 'selected';} ?> >Windows</option> 
											   <option value="canaima" <?php if($row['SO'] == 'canaima'){echo 'selected';} ?> >Canaima</option> 
											   <option value="ubuntu" <?php if($row['SO']  == 'ubuntu'){echo 'selected';} ?> >Ubuntu</option>
											   <option value="linux" <?php if($row['SO']   == 'linux'){echo 'selected';} ?> >Linux</option>

										
									   </select>
				<label for="estadoO" class="control-label">Estado del case: </label>
								
										<select id="estadoO" name="estado" class="form-control" disabled >
											   <option value="">Elije Una opcion</option> 
											   <option value="0"  <?php if($row['estado'] == '0'){echo 'selected';} ?> >operativo</option> 
											   <option value="1" <?php if($row['estado'] == '1'){echo 'selected';} ?> >no operativo</option> 
											  


										
									   </select>

						


		</div>
				


				
			<table id="TablaAgregadora" class="table table-bordered">
				

			<tr>
					<td>Nombre Accesorio</td>
					<td>Descripcion</td>
					<td>Opcion</td>


			</tr>


<?php 

	$consulta2 = "SELECT * FROM caracteristica_cpu WHERE id_cpu = '$id' ";
	$resultado2 = mysqli_query($conexion,$consulta2);

while ($row2 = mysqli_fetch_array($resultado2)) {?>


			<tr>
				
					<td>
						<select name="componentes[]" class="form-control" disabled >
									 <option value="">Seleccion</option> 
									 <option value="disco duro" <?php if($row2['c_nombre'] == 'disco duro'){echo 'selected';} ?> >Disco duro</option>
									 <option value="fuente de poder" <?php if($row2['c_nombre'] == 'fuente de poder'){echo 'selected';} ?> >Fuente de poder</option>  
									 <option value="memoria ram" <?php if($row2['c_nombre'] == 'memoria ram'){echo 'selected';} ?> >memoria RAM</option>
									 <option value="procesador" <?php if($row2['c_nombre'] == 'procesador'){echo 'selected';} ?> >Procesador</option> 
									 <option value="tarjeta madre" <?php if($row2['c_nombre'] == 'tarjeta madre'){echo 'selected';} ?> >Tarjeta madre</option> 
									 <option value="tarjeta de video" <?php if($row2['c_nombre'] == 'tarjeta de video'){echo 'selected';} ?> >tarjeta de video</option> 
									 <option value="tarjeta de red" <?php if($row2['c_nombre'] == 'tarjeta de red'){echo 'selected';} ?> >Tarjeta de red</option> 
									 <option value="tarjeta usb" <?php if($row2['c_nombre'] == 'tarjeta usb'){echo 'selected';} ?> >Tarjeta USB</option>
									 <option value="unidad de cd" <?php if($row2['c_nombre'] == 'unidad de cd'){echo 'selected';} ?> >Unidad de CD/DVD</option>
									   
								 </select>

					</td>

					<td><input type="text" name="descripcion[]" class="form-control" placeholder="Descripcion" id="descripcion" value="<?php    echo $row2['especificacion']  ?>" disabled ></td>
					<td></td>


					</tr>


			<?php } ?>
				
			</table>
						

				 
 <p><input type='submit' id='BtnHrw' name='Btn' value='Eliminar' class='btn btn-success'></p>


</form>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/crear.js"></script>

<script>
	
	$(document).on('ready',funcAjaxx);

	function funcAjaxx (){

$("#formModCpuB").on("submit", function(e){
	
	//Evitamos que se envíe por defecto
	e.preventDefault();
	//Creamos un FormData con los datos del mismo formulario
	var formData = new FormData(document.getElementById("formModCpuB"));

	//Llamamos a la función AJAX de jQuery
	$.ajax({
		//Definimos la URL del archivo al cual vamos a enviar los datos
		url: "php/cpu/baja-agregar-cpu.php",
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

'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only"></span></strong> No se encontraron registros!!! </div>'

);
}


mysqli_close($conexion);
 ?>

