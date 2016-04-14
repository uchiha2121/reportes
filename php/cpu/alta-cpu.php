
<?php 
include ("conexion/config.php");
/*
$consulta="SELECT * FROM "
$ejecutar_consulta = $conexion->query($consulta);
*/

 ?>




<form name="Validar_Get" id="formulario" method="get" action="php/cpu/agregar-cpu.php" enctype="application /x-www-form-urlencoded">
	

	<p><label for="os">Sistema Operativo: </label>
	
			<select name="os">
				   <option >Elije Una opcion</option> 
				   <option value="windows xp">Windows</option> 
				   <option value="windows 7">Canaima</option> 
				   <option value="windows 10">Ubuntu</option>
				   <option value="windows 10">Linux</option>

			
		   </select>

	</p>

	<p><label for="nombre">Nombre: </label>
	
			<select name="nombre">
				   <option >Elije Una opcion</option> 
				   <option value="1">Windows Vista</option> 
				   <option value="2">Windows 7</option> 
				   <option value="3">Windows XP</option>
				   <option value="10">Fedora</option> 
				   <option value="11">Debian</option> 
				   <option value="12">Suse</option> 
			 </select>
	</p>
	
	<p><label for="Descripcion">Descripcion: </label> <input type="text" name="Descripcion" id="nombre_txt" required ></p>
	


	<p><label for="Contraseña">Contraseña: </label><input type="password"  id="pass" name="contraseña" maxlength="10" minlength="8" required>
	</p>

	

	<p><input type="hidden" name="enviar_hdn" value="get"></p>

	<p><input type="button" id="enviar_get" name="enviar_btn" value="Enviar"></p>

</form>

