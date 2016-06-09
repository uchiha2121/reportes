$(function(){
	var ENV_WEBROOT = "../";
	
	$(".btn-agregar-producto").off("click");
	$(".btn-agregar-producto").on("click", function(e) {
		
		var producto_id = $("#cbo_producto").val();
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
	






	
	$(".eliminar-producto").off("click");
	$(".eliminar-producto").on("click", function(e) {
		var id = $(this).attr("id");
		$.ajax({
			url: 'php/prestamo/control-prestamo.php?page=2',
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