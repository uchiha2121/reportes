
<form name="Validar_Get" id="formCpu" class="form-horizontal" method="POST" action="" accept-charset="utf-8">
	
		<div class="form-group" >
			




 				<label for="code" class="codPresCpu">Codigo Case: </label>
  				<input type="text" name="codPresCpu" class="form-control" placeholder="Codigo Case" id="codPresCpu">




				<label for="SistemaO" class="control-label">Sistema Operativo: </label>
								
										<select id="os" name="SistemaO" class="form-control">
											   <option >Elije Una opcion</option> 
											   <option value="windows">Windows</option> 
											   <option value="canaima">Canaima</option> 
											   <option value="ubuntu">Ubuntu</option>
											   <option value="linux">Linux</option>

										
									   </select>

						


		</div>
				

			<label>Agrega otro parametro</label>

			<input type="button" id="btnAgregar" value="Agregar" class="btn btn-primary"><br/></br>

				
			<table id="TablaAgregadora" class="table table-bordered">
				



			<tr>
					<td>Nombre Accesorio</td>
					<td>Descripcion</td>
					<td>Opcion</td>


			</tr>

			<tr>
				
					<td>
						<select name="componentes[]" class="form-control" >
									   <option >Seleccion</option> 
									   <option value="disco duro">Disco duro</option>
									   <option value="fuente de poder">Fuente de poder</option>  
									   <option value="memoria ram">memoria RAM</option>
									   <option value="procesador">Procesador</option> 
									   <option value="tarjeta madre">Tarjeta madre</option> 
									   <option value="tarjeta de video">tarjeta de video</option> 
									   <option value="tarjeta de red">Tarjeta de red</option> 
									   <option value="tarjeta usb">Tarjeta USB</option>
									   <option value="unidad de cd">Unidad de CD/DVD</option>
									   
								 </select>

					</td>

					<td><input type="text" name="descripcion[]" class="form-control" placeholder="Descripcion" id="descripcion"></td>
					<td></td>


			</tr>
				
			</table>
						


				

				<p><input type="submit" id="BtnCpu" name="enviar_btn" value="Enviar" class="btn btn-success"></p>

</form>
<div id="mensaje" class="alert alert-success"">
	
</div>





