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
				$producto = $resultado_producto->fetch_object();
				$nombre = $producto->nombre_h;
				$descripcion = $producto->especificacion;
				
				
				$_SESSION['detalles'][$producto_id] = array('id'=>$producto_id, 'nombre'=>$nombre, 'especificacion'=>$descripcion);

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
		$objProducto = new ProductoTeclado();
		$json = array();
		$json['msj'] = 'Producto Agregado';
		$json['success'] = true;
	
		if (isset($_POST['producto_id']) && $_POST['producto_id']!='') {
			try {

				$producto_id = $_POST['producto_id'];
				
				$resultado_producto = $objProducto->getById($producto_id);
				$producto = $resultado_producto->fetch_object();
				$nombre = $producto->nombre_h;
				$descripcion = $producto->especificacion;
				
				
				$_SESSION['detalles'][$producto_id] = array('id'=>$producto_id, 'nombre'=>$nombre, 'especificacion'=>$descripcion);

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






			case 3:
		$objProducto = new ProductoMause();
		$json = array();
		$json['msj'] = 'Producto Agregado';
		$json['success'] = true;
	
		if (isset($_POST['producto_id']) && $_POST['producto_id']!='') {
			try {

				$producto_id = $_POST['producto_id'];
				
				$resultado_producto = $objProducto->getById($producto_id);
				$producto = $resultado_producto->fetch_object();
				$nombre = $producto->nombre_h;
				$descripcion = $producto->especificacion;
				
				
				$_SESSION['detalles'][$producto_id] = array('id'=>$producto_id, 'nombre'=>$nombre, 'especificacion'=>$descripcion);

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






			case 4:
		$objProducto = new ProductoImpresora();
		$json = array();
		$json['msj'] = 'Producto Agregado';
		$json['success'] = true;
	
		if (isset($_POST['producto_id']) && $_POST['producto_id']!='') {
			try {

				$producto_id = $_POST['producto_id'];
				
				$resultado_producto = $objProducto->getById($producto_id);
				$producto = $resultado_producto->fetch_object();
				$nombre = $producto->nombre_h;
				$descripcion = $producto->especificacion;
				
				
				$_SESSION['detalles'][$producto_id] = array('id'=>$producto_id, 'nombre'=>$nombre, 'especificacion'=>$descripcion);

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







			case 5:
		$objProducto = new ProductoRegulador();
		$json = array();
		$json['msj'] = 'Producto Agregado';
		$json['success'] = true;
	
		if (isset($_POST['producto_id']) && $_POST['producto_id']!='') {
			try {

				$producto_id = $_POST['producto_id'];
				
				$resultado_producto = $objProducto->getById($producto_id);
				$producto = $resultado_producto->fetch_object();
				$nombre = $producto->nombre_h;
				$descripcion = $producto->especificacion;
				
				
				$_SESSION['detalles'][$producto_id] = array('id'=>$producto_id, 'nombre'=>$nombre, 'especificacion'=>$descripcion);

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







			case 6:
		$objProducto = new ProductoCornetas();
		$json = array();
		$json['msj'] = 'Producto Agregado';
		$json['success'] = true;
	
		if (isset($_POST['producto_id']) && $_POST['producto_id']!='') {
			try {

				$producto_id = $_POST['producto_id'];
				
				$resultado_producto = $objProducto->getById($producto_id);
				$producto = $resultado_producto->fetch_object();
				$nombre = $producto->nombre_h;
				$descripcion = $producto->especificacion;
				
				
				$_SESSION['detalles'][$producto_id] = array('id'=>$producto_id, 'nombre'=>$nombre, 'especificacion'=>$descripcion);

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






		case 7:
		$objProducto = new ProductoCamaraWeb();
		$json = array();
		$json['msj'] = 'Producto Agregado';
		$json['success'] = true;
	
		if (isset($_POST['producto_id']) && $_POST['producto_id']!='') {
			try {

				$producto_id = $_POST['producto_id'];
				
				$resultado_producto = $objProducto->getById($producto_id);
				$producto = $resultado_producto->fetch_object();
				$nombre = $producto->nombre_h;
				$descripcion = $producto->especificacion;
				
				
				$_SESSION['detalles'][$producto_id] = array('id'=>$producto_id, 'nombre'=>$nombre, 'especificacion'=>$descripcion);

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





		case 8:
		$objProducto = new ProductoCase();
		$json = array();
		$json['msj'] = 'Producto Agregado';
		$json['success'] = true;
	
		if (isset($_POST['producto_id']) && $_POST['producto_id']!='') {
			try {

				$producto_id = $_POST['producto_id'];
				
				$resultado_producto = $objProducto->getById($producto_id);
				$producto = $resultado_producto->fetch_object();
				$nombre = $producto_id;
				$descripcion = $producto->SO;
				
				
				$_SESSION['detalles'][$producto_id] = array('id'=>$producto_id, 'nombre'=>$nombre, 'especificacion'=>$descripcion);

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




	case 9:
		$json = array();
		$json['msj'] = 'Producto Eliminado';
		$json['success'] = true;
	
		if (isset($_POST['id'])) {
			try {
				unset($_SESSION['detalles'][$_POST['id']]);
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

