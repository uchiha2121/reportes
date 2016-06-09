$(document).on('ready',funcAgregar);


function funcAgregar(){


	$("#btnAgregar").on('click',funcNuevaAgregarC);
	$("#btnAgregarH").on('click',funcNuevaAgregarH);
	$("body").on('click','.btn-danger',funcEliminarFila);
}

														//funcion agregar componentes del CPU
function funcNuevaAgregarC(){
	
	


	
	$("#TablaAgregadora")
		.append(


				$('<tr>')
					.append(


							
								

											$('<td>')
												.append(
													$('<select name="componentes[]" class="form-control" required >')
														.append(


														 $('<option>').text('Seleccion')
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
												$('<input id="searchBox" name="descripcion[]" class="form-control" placeholder="Descripcion" type="text" required>')

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


                                                                   // funcion para gregar componentes del HARDWARE
	function funcNuevaAgregarH(){
	
	


	
	$("#TablaAgregadora2")
		.append(


				$('<tr>')
					.append(


							
								

											$('<td>')
												.append(
													$('<select name="componentes[]" class="form-control" required>')
														.append(


														 $('<option value="-1">').text('Seleccion')
 															   )//select
														.append(
         
             
             												$('<option value="monitor">').text('Monitor')
                     											)//option

														.append(
         
             
             												$('<option value="teclado">').text('Teclado')
                     											)//option
														.append(
         
             
             												$('<option value="mouse">').text('Mouse')
                     											)//option
														.append(
         
             
             												$('<option value="impresora">').text('Impresora')
                     											)//option
														.append(
         
             
             												$('<option value="regulador">').text('regulador')
                     											)//option
														.append(
         
             
             												$('<option value="cornetas">').text('Cornetas')
                     											)//option
														.append(
         
             
             												$('<option value="camara web">').text('Camara Web')
                     											)//option
													
									   					)//td
																			
								

					         )

					.append(

									$('<td>')
										.append(
												$('<input id="searchBox" name="descripcion[]" class="form-control" placeholder="Descripcion" type="text" required>')

											   )
									   )//td
					.append(

									$('<td>')
										.append(
												$('<input id="searchBox" name="codPresHwr[]" class="form-control" placeholder="Serial Hardware" type="text" required>')

											   )
									   )//td



					.append(

											$('<td>')
												.append(
													$('<select name="estado[]" class="form-control" required>')
														.append(


														 $('<option>').text('Seleccion')
 															   )//select
														.append(
         
             
             												$('<option value="0">').text('Operativo')
                     											)//option

														.append(
         
             
             												$('<option value="1">').text('No Operativo')
                     											)//option
													)//select
											)//td
					.append(


									   	$('<td>')
									   		.append(

													$('<botton>').addClass('btn btn-danger').text('Eliminar')
									   			)


									   	      )//td	


			     );

				
			


	}




	function funcEliminarFila(){



		$(this).parent().parent().fadeOut('slow', function() { $(this).remove();}  );


	}	

