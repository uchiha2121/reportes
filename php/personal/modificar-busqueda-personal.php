<?php 
include ("/../../conexion/config.php");


			
			$busqueda = $_POST['busqueda'];


			$consulta = "SELECT * FROM `personal` INNER JOIN depto_pers on personal.cedula = depto_pers.id_cedula INNER JOIN departamentos on depto_pers.id_depto = departamentos.cod_depto WHERE cedula='$busqueda'";
			$resultado = mysqli_query($conexion,$consulta);





if($resultado && mysqli_num_rows($resultado)>0) {
$row = mysqli_fetch_array($resultado);

?>	


<form name="Validar_Get" id="formPerMod" class="form-horizontal" method="POST" action="" accept-charset="utf-8">
	
		<div class="form-group" >
			



				<br/><br/>
 				<label for="cedula">Cedula de identidad: </label>
  				<input type="text" class="form-control"  id="Cedula" value="<?php    echo $row['cedula']  ?>" disabled>
  				<input type="hidden" name="cedula" class="form-control" id="Cedula"  value="<?php    echo $row['cedula']  ?>" >


				<label for="nombre">Nombre: </label>
  				<input type="text" name="nombre" class="form-control" placeholder="Nombre" id="Nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,30}" value="<?php    echo $row['nombre']  ?>"  required><br/>


  				<label for="apellido">Apellido: </label>
  				<input type="text" name="apellido" class="form-control" placeholder="Apellido" id="Apellido" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,30}" value="<?php    echo $row['apellido']  ?>"  required><br/>


  				<label for="telefono">Telefono: </label>
  				<input type="text" name="telefono" class="form-control" placeholder="04261234567" id="Tel" pattern="[0-9]{10,11}" value="<?php    echo $row['telefono']  ?>"  required>
				

					


  				<label for="dpto">departamento: </label>
  				<select id="dpto" name="departamento"  class="form-control" required>
  					<option value="" >Seleccionar</option>
  						<?php include("modificar-seleccionar-departamento.php"); ?>

  				</select>

		

		</div>
				

			

				
			<input type="submit" id="BtnCpu" name="enviar_btn" value="Editar" class="btn btn-success">

</form>

<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/crear.js"></script>

<script>
	
	$(document).on('ready',funcAjaxx);

	function funcAjaxx (){

$("#formPerMod").on("submit", function(e){
	
	//Evitamos que se envíe por defecto
	e.preventDefault();
	//Creamos un FormData con los datos del mismo formulario
	var formData = new FormData(document.getElementById("formPerMod"));

	//Llamamos a la función AJAX de jQuery
	$.ajax({
		//Definimos la URL del archivo al cual vamos a enviar los datos
		url: "php/cpu/modificar-agregar-modificacion-cpu.php",
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

