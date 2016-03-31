<?php 

require_once("/conexion/config.php")

 ?>

 <?php 

$consulta = "SELECT * FROM usuario";


if ($resultado = mysqli_query($conexion, $consulta)) {

    /* obtener array asociativo */
    while ($row = mysqli_fetch_assoc($resultado)) {
        printf ("<br>%s %s (%s)",
        	$row["cedula"], 
        	$row["nombre"],
        	$row["contrasena"]);
    }

    /* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
}



mysqli_close($conexion) 

  ?>