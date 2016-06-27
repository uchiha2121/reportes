<h2>Alta personal</h2>
<form name="Validar_Get" id="formPersonal" class="form-horizontal" method="POST" action="" accept-charset="utf-8">
	
		<div class="form-group" >
			



				<br/><br/>
 				<label for="cedula">Cedula de identidad: </label>
  				<input type="text" name="cedula" class="form-control" placeholder="cedula" id="Cedula" pattern="[0-9]{7,8}" required><br/>


				<label for="nombre">Nombre: </label>
  				<input type="text" name="nombre" class="form-control" placeholder="Nombre" id="Nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,30}" required><br/>


  				<label for="apellido">Apellido: </label>
  				<input type="text" name="apellido" class="form-control" placeholder="Apellido" id="Apellido" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,30}" required><br/>


  				<label for="telefono">Telefono: </label>
  				<input type="text" name="telefono" class="form-control" placeholder="04261234567" id="Tel" pattern="[0-9]{11}"  required>
				

					


  				<label for="dpto">departamento: </label>
  				<select id="departamento" name="dpto"  class="form-control" required>
  					<option value="" >Seleccionar</option>
  						<?php include("seleccionar-departamento.php"); ?>

  				</select>

		</div>
				

			
				
			
						


				
				<br/><p><input type="submit" id="BtnCpu" name="enviar_btn" value="Enviar" class="btn btn-success"></p>

</form>
<div id="mensaje" class="col-xs-12 col-sm-12 col-xs-12 col-lg-12"></div>
	






