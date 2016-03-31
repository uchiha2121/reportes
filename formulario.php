<?php 
require_once("conexion/config.php");

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>



<script type="text/javascript">
	

function validar_datos_GET(){

var verificar = true;


				if (!document.getElementById("nombre_txt").value) {

					alert("El campo Nombre es requerido !");
					document.getElementById("nombre_txt").focus();
					verificar=false;

			} else if (!document.getElementById("pass").value) {

					alert("La Contraseña es requerida !");
					document.getElementById("pass").focus();
					verificar=false;

			} else if (!document.Validar_Get.genero[0].checked && !document.Validar_Get.genero[1].checked) {

					alert("El campo Genero es requerido !");
					document.getElementById("masculino").focus();
					verificar=false;

             }  



			if (verificar){

					document.getElementById("formulario").submit();
					
			}



} 





					window.onload = function(){

						document.getElementById("enviar_get").onclick = validar_datos_GET;

}





</script>



</head>
<body>
	<hgroup>
		<h1>Formulario GET</h1>
	</hgroup>


<form name="Validar_Get" id="formulario" method="get" action="formulario.php" enctype="application /x-www-form-urlencoded">
	

	<p><label for="nombre">Nombre: </label> <input type="text" name="nombre" id="nombre_txt" required ></p>


	<p><label for="Contraseña">Contraseña: </label><input type="password"  id="pass" name="contraseña" maxlength="10" minlength="8" required>
	</p>

	<p><label for="Masculino">Masculino </label><input type="radio" id="masculino" name="genero" value="M"></p>
	<p><label for="Femenino">Femenino </label><input type="radio" id="femenino" name="genero" value="F"></p>


	<p><input type="hidden" name="enviar_hdn" value="get"></p>

	<p><input type="button" id="enviar_get" name="enviar_btn" value="Enviar"></p>

</form>


<form action="/reportes/consulta.php" ><input type="submit" value="Consulta"></form>

<?php 


$insertar = "INSERT INTO usuario(cedula,nombre,contrasena) values ('123123','hhhhh','sadf')";

$ejecutar_insert  = mysqli_query ($conexion,$insertar);

$insertar = "INSERT INTO usuario(cedula,nombre,contrasena) values ('11111','123','21215023')";

$ejecutar_insert  = mysqli_query ($conexion,$insertar);

mysqli_close($conexion);
 ?>

<form action="/reportes/eliminar.php" ><input type="submit" value="ELIMINAR"></form>
</body>
</html>