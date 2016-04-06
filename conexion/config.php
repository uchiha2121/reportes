<?php

function conectarse(){

$servidor = "localhost";
$bd = "inventario_maquinas";
$usuario = "root";
$password = "";


$conectar = new mysqli($servidor,$usuario,$password,$bd) or die ("NO SE PUDO CONECTAR A LA BASE DE DATOS"); 
return $conectar;



}

$conexion = conectarse();
 
?>