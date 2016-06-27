			<table id="TablaAgregadora2" class="table table-bordered">


				<tr>
					
						<td>
									<select name="componentes[]" class="form-control" required>
										   <option value="">Seleccion</option> 
													  					<?php 

			  						include ("seleccionar-componente-hardware2.php");

			  					 ?>
									 </select>

						</td>

						<td>	<input type="text" name="descripcion[]" class="form-control" placeholder="Descripcion" maxlength="50" minlength="10" required></td>
						<td>	<input type="text" name="codPresHwr[]" class="form-control" placeholder="Serial Hardware"  maxlength="30" minlength="5" required></td>
						<td><select name="estado[]" class="form-control" required="">
										   <option value="">Seleccion</option> 
										   <option value="0">Operativo</option>
										   <option value="1">No Operativo</option>  
										   
										   
									 </select></td>
						<td></td>


				</tr>
				
			</table>