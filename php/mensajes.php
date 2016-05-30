<?php 

if(isset($_GET["mensaje"])){


	$mensaje = $_GET["mensaje"];
	echo "<br /> <span id='mensaje' class='mensaje'>$mensaje</span><br />";
}


 ?>