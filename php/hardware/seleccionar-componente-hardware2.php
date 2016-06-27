<?php 



$consulta2 = "SELECT * FROM componentes_hrw ORDER BY nombre_h";

$conexion2=$conexion;
$resultado2 = mysqli_query($conexion2,$consulta2); 


if ($resultado2){


		while ($row = mysqli_fetch_assoc($resultado2)) {
			echo "<option value ='" .$row["cod_compo_h"]."'>".$row["nombre_h"]."</option>";
		}




}

 ?>