<?php 
@session_start();
?>
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
	  
	        <tr>
	        	<td><?php echo $detalle['nombre'];?></td>
	            <td><?php echo $detalle['especificacion'];?></td>

	            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>
	        </tr>
	        <?php }?>
	        <tr>
	        	<td colspan="3" class="text-right">Total</td>
	     
	        	<td></td>
	        </tr>
	    </tbody>
	</table>
<?php }else{?>
<div class="panel-body"> No hay productos agregados</div>
<?php }?>

<script type="text/javascript" src="js/ajax_prestamo.js"></script>