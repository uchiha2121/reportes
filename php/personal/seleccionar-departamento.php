<?php 
include ("/../../conexion/config.php");


$consulta = "SELECT nombre_depto FROM departamentos ORDER BY nombre_depto";


$resultado = mysqli_query($conexion,$consulta); 


if ($resultado){


		while ($row = mysqli_fetch_assoc($resultado)) {
			echo "<option value ='" .$row["nombre_depto"]."'>".$row["nombre_depto"]."</option>";
		}




}

mysqli_close($conexion);
 ?>