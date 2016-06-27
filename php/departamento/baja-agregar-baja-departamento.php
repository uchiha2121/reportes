<?php 
include ("/../../conexion/config.php");



			$cod		   			  = $_POST['cod'];


			$consulta = "SELECT * FROM personal INNER JOIN departamentos on personal.id_depto = departamentos.cod_depto WHERE cod_depto='$cod'";
			$resultado = mysqli_query($conexion,$consulta);



if($resultado  && mysqli_num_rows($resultado)>0) {


die (

		'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> No se puede eliminar este departamento, ya que posee dependencia con algun personal </div>'

			);




}else {

$eliminar = "DELETE FROM departamentos WHERE cod_depto='$cod'";

$resultado2 = mysqli_query($conexion,$eliminar);


if($resultado2) {
					die(

'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Se a eliminado <strong>CORRECTAMENTE!</strong></div>'
					);



}else{

		die (

		'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong> Se a producido un Error al Modificar la consulta </div>'

			);


}




}







mysqli_close($conexion);
 ?>



