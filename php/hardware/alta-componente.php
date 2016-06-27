<h2>Alta componente</h2>
<form name="Validar_Get" id="formAltComp" class="form-horizontal" method="POST" accept-charset="utf-8">
	
	


		<div class="form-group" >
			



				<label for="code">Nombre Del componente: </label>
  				<input type="text" name="nombreComp" id="comp" class="form-control" placeholder="Nombre del componente" pattern="[a-z]{3,50}" required><br/>
			


		</div>

				
		


				

				<p><input type="submit" id="BtnDpto" name="Btn" value="Enviar" class="btn btn-success"></p>

</form>

<div id="mensaje" class="col-xs-12 col-sm-12 col-xs-12 col-lg-12"></div>








<h2>Modificar componente</h2>
<form name="Validar_Get" id="formConComp" class="form-horizontal" method="POST"  accept-charset="utf-8">
	
	


		<div class="form-group" >
			



				<label for="conComp" >Seleccione el componente: </label></br>
  				
  				<select id="conComp" name="conComp" class="form-control" required>
  					<option value="">seleccion</option>
  					<?php 

  						include ("seleccionar-componente-hardware1.php");

  					 ?>




  				</select>
			


		</div>

				
		


				

				<p><input type="submit" id="BtnDpto" name="Btn" value="Buscar" class="btn btn-info"></p>

</form>

<div id="mensaje2" class="col-xs-12 col-sm-12 col-xs-12 col-lg-12"></div>






<h2>Eliminar componente</h2>
<form name="Validar_Get" id="formBajComp" class="form-horizontal" method="POST"  accept-charset="utf-8">
	
	


					<div class="form-group" >
						



							<label for="code" class="Comp">Seleccione el componente:: </label>
			  				<select id="conComp" name="conComp" class="form-control" required>
			  					<option value="">seleccion</option>
			  					<?php 

			  						include ("seleccionar-componente-hardware2.php");

			  					 ?>




			  				</select>
						


					</div>

					


				

				<p><input type="submit" id="BtnDpto" name="Btn" value="Eliminar" class="btn btn-success"></p>

</form>

<div id="mensaje3" class="col-xs-12 col-sm-12 col-xs-12 col-lg-12"></div>

<?php
mysqli_close($conexion);
 ?>