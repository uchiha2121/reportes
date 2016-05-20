<?php 
include ("/../../conexion/config.php");

/*

*/

$id = $_POST['nombre_departamento'];
$nombre = $_POST['id_departamento'];


// verificar que no existe el departamento
$consulta = " SELECT * FROM departamento WHERE nombre_depto = '$nombre' ";
$ejecutar_consulta = $conexion -> query($consulta);
$num_regs = $ejecutar_consulta ->  $num_rows;

		if ( $num_regs == 0 ) {
			# code...
		}
			else {
				$mensaje = "No se dar de alta el registro, porque <br>$nombre</br> ya existe"

			}
$conexion -> close();
header("location: /index.php?op=cpu&opi=alta&mensaje=$mensaje")
 ?>



