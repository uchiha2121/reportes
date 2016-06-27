<?php 
include ("/../../conexion/config.php");

			$cedula			   = $_POST['cedula'];


			$validar = "SELECT * FROM personal WHERE cedula= '$cedula' ";
			$val = mysqli_query($conexion,$validar);



if (mysqli_num_rows($val)>0) {

die(


'<div  class="alert alert-danger"><button class="close" data-dismiss="alert" ><span>&times;</span></button><strong><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span class="sr-only">Success:</span></strong>El numero de cedula ya existe </div><script>$("#formPersonal")[0].reset();</script>'
					);

			




	mysqli_free_result($val);

}else{

			$nombre			   = $_POST['nombre'];
			$apellido		   = $_POST['apellido'];
			$telefono		   = $_POST['telefono'];
			$departamento	   = $_POST['dpto'];

$consulta = "INSERT personal VALUES ('".$cedula."','".$nombre."','".$apellido."','".$telefono."','".$departamento."')";

			$resultado = mysqli_query($conexion,$consulta);


if($resultado) {
					die(

								'<div class="alert alert-success"><button class="close" data-dismiss="alert" ><span>&times;</span></button>
								<strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
												<span class="sr-only">Success:</span>En hora buena! </strong> Su registro ha sido envida con <strong>EXITO!</strong></div>

								<script>$("#formPersonal")[0].reset();</script>'
					);

}




}






mysqli_close($conexion);

 ?>



