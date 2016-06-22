$(function(){

	
	$(".btn-agregar-producto-monitor").off("click");
	$(".btn-agregar-producto-monitor").on("click", function(e) {
		
		var producto_id = $("#monitor").val();
		if(producto_id!=0){
			
				$.ajax({
					url: 'php/prestamo/control-prestamo.php?page=1',
					type: 'post',
					data: {'producto_id':producto_id },
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							
							alertify.success(data.msj);
							$(".detalle-producto").load('php/prestamo/detalle-prestamo.php');
							
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			
			}else{
			alertify.error('Seleccione un producto');
		}
	});
	


	$(".btn-agregar-producto-teclado").off("click");
	$(".btn-agregar-producto-teclado").on("click", function(e) {
		
		var producto_id = $("#teclado").val();
		if(producto_id!=0){
			
				$.ajax({
					url: 'php/prestamo/control-prestamo.php?page=2',
					type: 'post',
					data: {'producto_id':producto_id },
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							
							alertify.success(data.msj);
							$(".detalle-producto").load('php/prestamo/detalle-prestamo.php');
							
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			
			}else{
			alertify.error('Seleccione un producto');
		}
	});






		$(".btn-agregar-producto-mouse").off("click");
	$(".btn-agregar-producto-mouse").on("click", function(e) {
		
		var producto_id = $("#mouse").val();
		if(producto_id!=0){
			
				$.ajax({
					url: 'php/prestamo/control-prestamo.php?page=3',
					type: 'post',
					data: {'producto_id':producto_id },
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							
							alertify.success(data.msj);
							$(".detalle-producto").load('php/prestamo/detalle-prestamo.php');
							
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			
			}else{
			alertify.error('Seleccione un producto');
		}
	});






		$(".btn-agregar-producto-impresora").off("click");
	$(".btn-agregar-producto-impresora").on("click", function(e) {
		
		var producto_id = $("#impresora").val();
		if(producto_id!=0){
			
				$.ajax({
					url: 'php/prestamo/control-prestamo.php?page=4',
					type: 'post',
					data: {'producto_id':producto_id },
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							
							alertify.success(data.msj);
							$(".detalle-producto").load('php/prestamo/detalle-prestamo.php');
							
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			
			}else{
			alertify.error('Seleccione un producto');
		}
	});





		$(".btn-agregar-producto-regulador").off("click");
	$(".btn-agregar-producto-regulador").on("click", function(e) {
		
		var producto_id = $("#regulador").val();
		if(producto_id!=0){
			
				$.ajax({
					url: 'php/prestamo/control-prestamo.php?page=5',
					type: 'post',
					data: {'producto_id':producto_id },
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							
							alertify.success(data.msj);
							$(".detalle-producto").load('php/prestamo/detalle-prestamo.php');
							
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			
			}else{
			alertify.error('Seleccione un producto');
		}
	});




		$(".btn-agregar-producto-cornetas").off("click");
	$(".btn-agregar-producto-cornetas").on("click", function(e) {
		
		var producto_id = $("#cornetas").val();
		if(producto_id!=0){
			
				$.ajax({
					url: 'php/prestamo/control-prestamo.php?page=6',
					type: 'post',
					data: {'producto_id':producto_id },
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							
							alertify.success(data.msj);
							$(".detalle-producto").load('php/prestamo/detalle-prestamo.php');
							
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			
			}else{
			alertify.error('Seleccione un producto');
		}
	});



		$(".btn-agregar-producto-camara").off("click");
	$(".btn-agregar-producto-camara").on("click", function(e) {
		
		var producto_id = $("#camara").val();
		if(producto_id!=0){
			
				$.ajax({
					url: 'php/prestamo/control-prestamo.php?page=7',
					type: 'post',
					data: {'producto_id':producto_id },
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							
							alertify.success(data.msj);
							$(".detalle-producto").load('php/prestamo/detalle-prestamo.php');
							
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			
			}else{
			alertify.error('Seleccione un producto');
		}
	});



		$(".btn-agregar-producto-case").off("click");
	$(".btn-agregar-producto-case").on("click", function(e) {
		
		var producto_id = $("#case").val();
		if(producto_id!=0){
			
				$.ajax({
					url: 'php/prestamo/control-prestamo.php?page=8',
					type: 'post',
					data: {'producto_id':producto_id },
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							
							alertify.success(data.msj);
							$(".detalle-producto").load('php/prestamo/detalle-prestamo.php');
							
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			
			}else{
			alertify.error('Seleccione un producto');
		}
	});

	
	$(".eliminar-producto").off("click");
	$(".eliminar-producto").on("click", function(e) {
		var id = $(this).attr("id");
		$.ajax({
			url: 'php/prestamo/control-prestamo.php?page=9',
			type: 'post',
			data: {'id':id},
			dataType: 'json'
		}).done(function(data){
			if(data.success==true){
				alertify.success(data.msj);
				$(".detalle-producto").load('php/prestamo/detalle-prestamo.php');
			}else{
				alertify.error(data.msj);
			}
		})
	});
	
});