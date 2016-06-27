<?php 
include ("/../../conexion/config.php");


$consulta = "SELECT * FROM componentes_hrw ORDER BY nombre_h";


$resultado = mysqli_query($conexion,$consulta); 


if ($resultado){


		while ($row = mysqli_fetch_assoc($resultado)) {
			echo "<option value ='" .$row["cod_compo_h"]."'>".$row["nombre_h"]."</option>";
		}




}

mysqli_close($conexion);
 ?>