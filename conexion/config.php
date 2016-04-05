<?php

function conectarse(){

$hostname_mi = "localhost";
$database_mi = "auditoria";
$username_mi = "root";
$password_mi = "";


$conectar = new mysqli($hostname_mi, $username_mi, $password_mi) or die trigger_error(mysql_error(),E_USER_ERROR); return $conectar;



}

$conexion=conectarse();
 
?>