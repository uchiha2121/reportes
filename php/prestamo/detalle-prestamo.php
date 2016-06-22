<?php 
@session_start();
?>
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
	            <td><?php echo $detalles['especificacion'];?></td>
				<input type="hidden" name="serial[]" value="<?php echo $detalles['id'];?>">
	            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalles['id'];?>">Eliminar</button></td>
	        </tr>
	        <?php }?>
	        <tr>
	     
	        	<td></td>
	        </tr>
	    </tbody>
	</table>
<?php }else{?>
<div class="panel-body"> No hay productos agregados</div>
<?php }?>


<script type="text/javascript" src="js/ajax_prestamo.js"></script>