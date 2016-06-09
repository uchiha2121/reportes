<?php
session_start();
if(isset($_GET["page"])){
	$page=$_GET["page"];
}else{
	$page=0;
}

require_once '/../../conexion/config.php';
require_once 'producto.php';

switch($page){

	case 1:
		$objProducto = new ProductoMonitor();
		$json = array();
		$json['msj'] = 'Producto Agregado';
		$json['success'] = true;
	
		if (isset($_POST['producto_id']) && $_POST['producto_id']!='') {
			try {

				$producto_id = $_POST['producto_id'];
				
				$resultado_producto = $objProducto->getById($producto_id);
				$producto = $resultado_producto->fetchObject();
				$nombre = $producto->h_nombre;
				$descripcion = $producto->descripcion;
				
				
				
				
				$_SESSION['detalle'][$producto_id] = array('id'=>$producto_id, 'nombre'=>$nombre, 'especificacion'=>$descripcion);

				$json['success'] = true;

				echo json_encode($json);
	
			} catch (PDOException $e) {
				$json['msj'] = $e->getMessage();
				$json['success'] = false;
				echo json_encode($json);
			}
		}else{
			$json['msj'] = 'Ingrese un producto';
			$json['success'] = false;
			echo json_encode($json);
		}
		break;

	case 2:
		$json = array();
		$json['msj'] = 'Producto Eliminado';
		$json['success'] = true;
	
		if (isset($_POST['id'])) {
			try {
				unset($_SESSION['detalle'][$_POST['id']]);
				$json['success'] = true;
	
				echo json_encode($json);
	
			} catch (PDOException $e) {
				$json['msj'] = $e->getMessage();
				$json['success'] = false;
				echo json_encode($json);
			}
		}
		break;

}
?>