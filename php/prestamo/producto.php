<?php 
class ProductoMonitor{

function get(){
		$sql = "SELECT * FROM hardware WHERE nombre_h='monitor' AND disponibilidad=0 AND estado=0";
		global $conexion;
		return $conexion->query($sql);
}//get

function getByid($id){
		$sql = "SELECT * FROM hardware WHERE serial_h='$id'";
		global $conexion;
		return $conexion->query($sql);


}//getByid


}//principal



class ProductoTeclado{

function get(){
		$sql = "SELECT * FROM hardware WHERE nombre_h='teclado' AND disponibilidad=0 AND estado=0";
		global $conexion;
		return $conexion->query($sql);
}//get

function getByid($id){
		$sql = "SELECT * FROM hardware WHERE serial_h='$id'";
		global $conexion;
		return $conexion->query($sql);


}//getByid


}//principal




class ProductoMause{

function get(){
		$sql = "SELECT * FROM hardware WHERE nombre_h='mouse' AND disponibilidad=0 AND estado=0";
		global $conexion;
		return $conexion->query($sql);
}//get

function getByid($id){
		$sql = "SELECT * FROM hardware WHERE serial_h='$id'";
		global $conexion;
		return $conexion->query($sql);


}//getByid


}//principal





class ProductoImpresora{

function get(){
		$sql = "SELECT * FROM hardware WHERE nombre_h='impresora' AND disponibilidad=0 AND estado=0";
		global $conexion;
		return $conexion->query($sql);
}//get

function getByid($id){
		$sql = "SELECT * FROM hardware WHERE serial_h='$id'";
		global $conexion;
		return $conexion->query($sql);


}//getByid


}//principal




class ProductoRegulador{

function get(){
		$sql = "SELECT * FROM hardware WHERE nombre_h='regulador' AND disponibilidad=0 AND estado=0";
		global $conexion;
		return $conexion->query($sql);
}//get

function getByid($id){
		$sql = "SELECT * FROM hardware WHERE serial_h='$id'";
		global $conexion;
		return $conexion->query($sql);


}//getByid


}//principal




class ProductoCornetas{

function get(){
		$sql = "SELECT * FROM hardware WHERE nombre_h='cornetas' AND disponibilidad=0 AND estado=0";
		global $conexion;
		return $conexion->query($sql);
}//get

function getByid($id){
		$sql = "SELECT * FROM hardware WHERE serial_h='$id'";
		global $conexion;
		return $conexion->query($sql);


}//getByid


}//principal




class ProductoCamaraWeb{

function get(){
		$sql = "SELECT * FROM hardware WHERE nombre_h='camara web' AND disponibilidad=0 AND estado=0";
		global $conexion;
		return $conexion->query($sql);
}//get

function getByid($id){
		$sql = "SELECT * FROM hardware WHERE serial_h='$id'";
		global $conexion;
		return $conexion->query($sql);


}//getByid


}//principal




class ProductoCase{

function get(){
		$sql = "SELECT * FROM cpu WHERE disponibilidad=0 AND estado=0" ;
		global $conexion;
		return $conexion->query($sql);
}//get

function getByid($id){
		$sql = "SELECT * FROM cpu WHERE cod_cpu='$id'";
		global $conexion;
		return $conexion->query($sql);


}//getByid


}//principal
?>
