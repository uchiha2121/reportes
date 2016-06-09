<?php
session_start();
$_SESSION['detalles'] = array();
require_once '/../../conexion/config.php';
require_once 'producto.php';

$objMonitor = new ProductoMonitor();
$resultado_monitor = $objMonitor->get();


$objTeclado = new ProductoTeclado();
$resultado_teclado = $objTeclado->get();


$objMouse = new ProductoMause();
$resultado_mouse = $objMouse->get();


$objImpresora = new ProductoImpresora();
$resultado_impresora = $objImpresora->get();


$objRegulador = new ProductoRegulador();
$resultado_regulador = $objRegulador->get();


$objCornetas = new ProductoCornetas();
$resultado_cornetas = $objCornetas->get();


$objCamaraWeb = new ProductoCamaraWeb();
$resultado_camaraweb = $objCamaraWeb->get();

 ?>



 <div class="page-header">
			<h1>Prestamo equipo</h1>
		</div>


<div class="row">

				<div class="col-md-4">	
					<div>Monitor:
					<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_monitor as $monitor):?>
							<option value="<?php echo $monitor['serial_h']?>"><?php echo $monitor['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto">Agregar</button>
						</div>
					</div>


</div></br>

<div class="row">

				<div class="col-md-4">	
					<div>Teclado:
					<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_teclado as $teclado):?>
							<option value="<?php echo $teclado['serial_h']?>"><?php echo $teclado['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto">Agregar</button>
						</div>
					</div>


</div></br>

<div class="row">

				<div class="col-md-4">	
					<div>mouse:
					<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_mouse as $mouse):?>
							<option value="<?php echo $mouse['serial_h']?>"><?php echo $mouse['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto">Agregar</button>
						</div>
					</div>


</div></br>

<div class="row">

				<div class="col-md-4">	
					<div>Impresora:
					<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_impresora as $impresora):?>
							<option value="<?php echo $impresora['serial_h']?>"><?php echo $impresora['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto">Agregar</button>
						</div>
					</div>


</div></br>

<div class="row">

				<div class="col-md-4">	
					<div>Regulador:
					<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_regulador as $regulador):?>
							<option value="<?php echo $regulador['serial_h']?>"><?php echo $regulador['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto">Agregar</button>
						</div>
					</div>


</div></br>

<div class="row">

				<div class="col-md-4">	
					<div>Cornetas:
					<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_cornetas as $cornetas):?>
							<option value="<?php echo $cornetas['serial_h']?>"><?php echo $cornetas['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto">Agregar</button>
						</div>
					</div>


</div></br>

<div class="row">

				<div class="col-md-4">	
					<div>Camara Web:
					<select name="cbo_producto" id="cbo_producto" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_camaraweb as $camaraWeb):?>
							<option value="<?php echo $camaraWeb['serial_h']?>"><?php echo $camaraWeb['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto">Agregar</button>
						</div>
					</div>


</div></br>





		<div class="panel panel-info">
			 <div class="panel-heading">
		        <h3 class="panel-title">Productos</h3>
		      </div>
			<div class="panel-body detalle-producto">
				<?php if(count($_SESSION['detalle'])>0){?>
					<table class="table">
					    <thead>
					        <tr>
					            <th>nombre</th>
					            <th>Descripci&oacute;n</th>
					            <th></th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php 
					    	foreach($_SESSION['detalle'] as $k => $detalle){ 
					    	?>
					        <tr>
					        	<td><?php echo $detalle['nombre'];?></td>
					            <td><?php echo $detalle['especificacion'];?></td>
					            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>
					        </tr>
					        <?php }?>
					    </tbody>
					</table>
				<?php }else{?>
				<div class="panel-body"> No hay productos agregados</div>
				<?php }?>
			</div>
		</div>