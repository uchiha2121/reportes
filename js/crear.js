$(document).on('ready',funcAgregar);


function funcAgregar(){


	$("#btnAgregar").on('click',funcNuevaAgregar);
	$("body").on('click','.btn-danger',funcEliminarFila);
}


function funcNuevaAgregar(){
	
	


	
	$("#TablaAgregadora")
		.append(


				$('<tr>')
					.append(


							
								

											$('<td>')
												.append(
													$('<select name="componentes[]" class="form-control">')
														.append(


														 $('<option value="-1">').text('Seleccion')
 															   )//select
														.append(
         
             
             												$('<option value="disco duro">').text('Disco Duro')
                     											)//option

														.append(
         
             
             												$('<option value="fuente de poder">').text('Fuente de poder')
                     											)//option
														.append(
         
             
             												$('<option value="memoria ram">').text('Memoria ram')
                     											)//option
														.append(
         
             
             												$('<option value="procesador">').text('Procesador')
                     											)//option
														.append(
         
             
             												$('<option value="tarjeta madre">').text('Tarjeta madre')
                     											)//option
														.append(
         
             
             												$('<option value="tarjeta de video">').text('Tarjeta de video')
                     											)//option
														.append(
         
             
             												$('<option value="tarjeta de red">').text('Tarjeta de red')
                     											)//option
														.append(
         
             
             												$('<option value="tarjeta usb">').text('Tarjecta USB')
                     											)//option
														.append(
         
             
             												$('<option value="unidad de cd">').text('Unidad de cd/dvd')
                     											)//option
									   					)//td
																			
								

					         )

						.append(

									$('<td>')
										.append(
												$('<input id="searchBox" name="descripcion[]" class="form-control" placeholder="Descripcion" type="text">')

											   )
									   )

									   .append(

									   	$('<td>')
									   		.append(

													$('<botton>').addClass('btn btn-danger').text('Eliminar')
									   			)


									   	      )	


			     );

				
			


	}




	function funcEliminarFila(){



		$(this).parent().parent().fadeOut('slow', function() { $(this).remove();}  );


	}	

