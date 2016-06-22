
<h2>Consulta CPU</h2>

<form name="Validar_Get" id="formPerBus" method="POST" accept-charset="utf-8" class="navbar-form navbar-left" role="search">

<div class="row">



	  				 <div class="form-group">

								<label for="busqueda">Busqueda avanzada</label>
					  			<input type="text" name="busqueda" 	class="form-control" placeholder="Numero de cedula...">

								<button type="" class="btn btn-info">Buscar</button>
					  </div>


</div>


					
</form>

<form name="Validar_Get" id="formPerBT" method="POST"  accept-charset="utf-8" class="navbar-form navbar-left" role="search">


			<div class="form-group">

					  
					  <button name="busqueda" type="" class="btn btn-primary">Buscar todos</button>

			</div>
					
</form>
<div class="col-xs-12 col-sm-12 col-xs-12 col-lg-12">

<form name="Validar_Get" id="formPerBdep" method="POST"  accept-charset="utf-8" class="navbar-form navbar-left" role="search">


			<div class="form-group">
			<label for="busqueda">Busqueda por departamento</label>
					  <select id="departamento" name="dpto"  class="form-control" required>
  					<option value="" >Seleccionar</option>
  						<?php include("seleccionar-departamento.php"); ?>

  				</select>
					  <button name="busqueda" type="" class="btn btn-primary">Buscar</button>

			</div>
					
</form>




</div>


<div id="mensaje" class="col-xs-12 col-sm-12 col-xs-12 col-lg-12"></div>
