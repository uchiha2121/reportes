
<?php 
include ("/../../conexion/config.php");
/*
$consulta="SELECT * FROM "
$ejecutar_consulta = $conexion->query($consulta);
*/

 ?>




<form name="Validar_Get" id="formulario" method="post" action="php/departamento/agregar-departamento.php" enctype="application /x-www-form-urlencoded">
	

	

	<p><label for="id_departamento">Id Departamento: </label><input type="number"  id="pass" name="id_departamento" maxlength="10" minlength="8" required>
	</p>

	
	<p><label for="nombre_departamento">Departamento: </label> <input type="text" name="nombre_departamento" id="nombre_txt" required ></p>
	


	

	

	<p><input type="hidden" name="enviar_hdn" value="get"></p>

	<p><input type="button" id="enviar_get" name="enviar_btn" value="Enviar"></p>

</form>

