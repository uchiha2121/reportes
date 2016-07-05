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


$objCase = new ProductoCase();
$resultado_case = $objCase->get();

 ?>


 <div class="page-header">

															<h1>Prestamo equipo</h1>
		</div>


<form id="ree">


<div class="row">

				<div class="col-md-4">	
					<div>Monitor:
					<select name="monitor" id="monitor" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_monitor as $monitor):?>
							<option value="<?php echo $monitor['serial_h']?>"><?php echo $monitor['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto-monitor">Agregar</button>
						</div>
					</div>


</div></br>

<div class="row">

				<div class="col-md-4">	
					<div>Teclado:
					<select name="teclado" id="teclado" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_teclado as $teclado):?>
							<option value="<?php echo $teclado['serial_h']?>"><?php echo $teclado['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto-teclado">Agregar</button>
						</div>
					</div>


</div></br>

<div class="row">

				<div class="col-md-4">	
					<div>Mouse:
					<select name="mouse" id="mouse" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_mouse as $mouse):?>
							<option value="<?php echo $mouse['serial_h']?>"><?php echo $mouse['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto-mouse">Agregar</button>
						</div>
					</div>


</div></br>

<div class="row">

				<div class="col-md-4">	
					<div>Impresora:
					<select name="impresora" id="impresora" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_impresora as $impresora):?>
							<option value="<?php echo $impresora['serial_h']?>"><?php echo $impresora['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto-impresora">Agregar</button>
						</div>
					</div>


</div></br>

<div class="row">

				<div class="col-md-4">	
					<div>Regulador:
					<select name="regulador" id="regulador" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_regulador as $regulador):?>
							<option value="<?php echo $regulador['serial_h']?>"><?php echo $regulador['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto-regulador">Agregar</button>
						</div>
					</div>


</div></br>

<div class="row">

				<div class="col-md-4">	
					<div>Cornetas:
					<select name="cornetas" id="cornetas" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_cornetas as $cornetas):?>
							<option value="<?php echo $cornetas['serial_h']?>"><?php echo $cornetas['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto-cornetas">Agregar</button>
						</div>
					</div>


</div></br>

<div class="row">

				<div class="col-md-4">	
					<div>Camara Web:
					<select name="camara" id="camara" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_camaraweb as $camaraWeb):?>
							<option value="<?php echo $camaraWeb['serial_h']?>"><?php echo $camaraWeb['especificacion']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto-camara">Agregar</button>
						</div>
					</div>


</div></br>
</form>



																<h2>Prestamo case</h2>


<div class="row">

				<div class="col-md-4">	
					<div>Case:
					<select name="case" id="case" class="col-md-2 form-control">
						<option value="0">Seleccion</option>
						<?php foreach($resultado_case as $case):?>
							<option value="<?php echo $case['cod_cpu']?>"><?php echo $case['cod_cpu']?></option>
						<?php endforeach;?>
					</select>
					</div>
				</div>


				<div class="col-md-2">
						<div style="margin-top: 19px;">
						<button type="button" class="btn btn-success btn-agregar-producto-case">Agregar</button>
						</div>
					</div>


</div></br>



<form name="Validar_Get" id="formPres" class="form-horizontal" method="POST" accept-charset="utf-8">
		
		<div class="panel panel-info">
			 <div class="panel-heading">
		        <h3 class="panel-title">Productos</h3>
		      </div>

			<div class="panel-body detalle-producto">
				


					<?php if(count($_SESSION['detalles'])>0){?>
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
						    	foreach($_SESSION['detalles'] as $k => $detalles){ 
						    	?>
						        <tr>
						        	<td><?php echo $detalles['nombre'];?></td>
						        	<input type="hidden" name="serial[]" value="<?php echo $detalles['id'];?>">
						            <td><?php echo $detalles['especificacion'];?></td>
						            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalles['id'];?>">Eliminar</button></td>
						        </tr>
						        <?php }?>
						    </tbody>
						</table>
					<?php }else{?>
					<div class="panel-body"> No hay productos agregados</div>
					<?php }?>


				
			</div>
		</div>
					
					<div class="col-xs-4 col-4-12 col-xs-4 col-lg-4">
							<label for="cedula">Cedula</label>
							<input type="text" name="cedula" id="cedula" class="form-control" placeholder="Cedula de identidad" required>
					</div>



					<div class="col-xs-4 col-4-12 col-xs-4 col-lg-4">
							<label for="fecha">Fecha inicial del prestamo</label>
							<input type="date" name="fecha" id="fecha" class="form-control" required>
					</div>
					

					<div class="col-xs-12 col-sm-12 col-xs-12 col-lg-12" style=" margin-bottom: 19px; margin-top: 19px;">
					<input type="submit" id="BtnCpu" name="enviar_btn" value="Enviar" class="btn btn-primary">
					</div>
					

</form>

<div id="mensaje"  class="col-xs-12 col-sm-12 col-xs-12 col-lg-12"></div>
	<a name="ancla"></a>
	