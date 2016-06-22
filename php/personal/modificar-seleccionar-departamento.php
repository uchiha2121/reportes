<?php 



$consulta = "SELECT * FROM departamentos ORDER BY nombre_depto";


$resultado = mysqli_query($conexion,$consulta); 


if ($resultado){


		while ($row1 = mysqli_fetch_assoc($resultado)) {

			echo "<option value ='".$row1['cod_depto']."'";

			 
          if($row1['cod_depto'] == $row['cod_depto']){echo ' selected ';} 
			  

			  echo ">".$row1['nombre_depto']."</option>";
		

		
		}




}


 ?>