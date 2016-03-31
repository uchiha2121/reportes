<?php 
require_once("conexion/config.php");

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta>
	<title>borrar</title>
</head>
<body>


<?php 

$consulta = " DELETE FROM  usuario WHERE contrasena = 'sadf' ";


 if (($ejecutar_consulta = mysqli_query($conexion,$consulta)) == true )
echo "<br>Datos eliminados"; else echo "<br>no se apodido eliminar o no se encuentra el registro.";

mysqli_close($conexion);

 ?>	




</body>
</html>

