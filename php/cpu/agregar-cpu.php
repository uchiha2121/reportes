<?php 
include ("config.php");
$consulta="SELECT * FROM "
$ejecutar_consulta = $conexion->query($consulta);



 ?>
 <form name="Validar_Get" id="formulario" method="get" action="formulario.php" enctype="application /x-www-form-urlencoded">
	

	<p><label for="nombre">Nombre: </label> <input type="text" name="nombre" id="nombre_txt" maxlength="20" minlength="8" required ></p>

	<p><label for="Masculino">Masculino </label><input type="radio" id="masculino" name="genero" value="M"></p>
	<p><label for="Femenino">Femenino </label><input type="radio" id="femenino" name="genero" value="F"></p>


	<p><input type="hidden" name="enviar_hdn" value="get"></p>

	<p><input type="button" id="enviar_get" name="enviar_btn" value="Enviar"></p>

</form>