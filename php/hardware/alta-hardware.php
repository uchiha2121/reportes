<form name="Validar_Get" id="formHrw" class="form-horizontal" method="POST" action="" accept-charset="utf-8">
	
	


			<br/><br/><label>Agrega otro parametro</label>

			<input type="button" id="btnAgregarH" value="Agregar" class="btn btn-primary"><br/></br>

				
			<table id="TablaAgregadora2" class="table table-bordered">
				<tr>
						<td>Nombre Accesorio</td>
						<td>Descripcion</td>
						<td>Serial Hardware</td>
						<td>Estado</td>
						<td>Opcion</td>
				</tr>

				<tr>
					
						<td>
									<select name="componentes[]" class="form-control" required>
										   <option >Seleccion</option> 
										   <option value="monitor">Monitor</option>
										   <option value="teclado">Teclado</option>  
										   <option value="mouse">Mouse</option>
										   <option value="impresora">Impresora</option>
										   <option value="regulador">Regulador</option>  
										   <option value="cornetas">Cornetas</option> 
										   <option value="camara web">Camara Web</option> 
										   
									 </select>

						</td>

						<td>	<input type="text" name="descripcion[]" class="form-control" placeholder="Descripcion" required></td>
						<td>	<input type="text" name="codPresHwr[]" class="form-control" placeholder="Serial Hardware"  required></td>
						<td><select name="estado[]" class="form-control" >
										   <option >Seleccion</option> 
										   <option value="0">Operativo</option>
										   <option value="1">No Operativo</option>  
										   
										   
									 </select></td>
						<td></td>


				</tr>
				
			</table>
						


				

				<p><input type="submit" id="BtnHrw" name="Btn" value="Enviar" class="btn btn-success"></p>

</form>
<div id="mensaje" class="col-xs-12 col-sm-12 col-xs-12 col-lg-12"></div>





