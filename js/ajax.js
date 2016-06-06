var mensaje = $("#mensaje");
var busqueda = $("#busqueda");
//Ocultamos el contenedor
mensaje.hide();
$(document).on('ready',funcAjax);



function funcAjax (){
//FORMULARIO ALTA HARDWARE
//Cuando el formulario con ID add se envíe...
$("#formHrw").on("submit", function(e){
	//Evitamos que se envíe por defecto
	e.preventDefault();
	//Creamos un FormData con los datos del mismo 
	var formData = new FormData(document.getElementById("formHrw"));

	//Llamamos a la función AJAX de jQuery
	$.ajax({
		//Definimos la URL del archivo al cual vamos a enviar los datos
		url: "php/hardware/agregar-hardware.php",
		//Definimos el tipo de método de envío
		type: "POST",
		//Definimos el tipo de datos que vamos a enviar y recibir
		dataType: "HTML",
		//Definimos la información que vamos a enviar
		data: formData,
		//Deshabilitamos el caché
		cache: false,
		//No especificamos el contentType
		contentType: false,
		//No permitimos que los datos pasen como un objeto
		processData: false
	}).done(function(echo){
		//Cuando recibamos respuesta, la mostramos
		
		mensaje.html(echo);
		mensaje.slideDown(500); });
});


// FORMULARIO CONSULTA HARDWARE
//Cuando el formulario con ID add se envíe...
$("#formConHrw").on("submit", function(e){
	//Evitamos que se envíe por defecto
	e.preventDefault();
	//Creamos un FormData con los datos del mismo formulario
	var formData = new FormData(document.getElementById("formConHrw"));

	//Llamamos a la función AJAX de jQuery
	$.ajax({
		//Definimos la URL del archivo al cual vamos a enviar los datos
		url: "php/hardware/busqueda-hardware.php",
		//Definimos el tipo de método de envío
		type: "POST",
		//Definimos el tipo de datos que vamos a enviar y recibir
		dataType: "HTML",
		//Definimos la información que vamos a enviar
		data: formData,
		//Deshabilitamos el caché
		cache: false,
		//No especificamos el contentType
		contentType: false,
		//No permitimos que los datos pasen como un objeto
		processData: false
	}).done(function(echo){
		//Cuando recibamos respuesta, la mostramos
		
		mensaje.html(echo);
		mensaje.slideDown(500); });
});

// FORMULARIO CONSULTAR TODO HARDWARE
//Cuando el formulario con ID add se envíe...
$("#formConHrwT").on("submit", function(e){
	//Evitamos que se envíe por defecto
	e.preventDefault();
	//Creamos un FormData con los datos del mismo formulario
	var formData = new FormData(document.getElementById("formConHrwT"));

	//Llamamos a la función AJAX de jQuery
	$.ajax({
		//Definimos la URL del archivo al cual vamos a enviar los datos
		url: "php/hardware/busquedaTotal-hardware.php",
		//Definimos el tipo de método de envío
		type: "POST",
		//Definimos el tipo de datos que vamos a enviar y recibir
		dataType: "HTML",
		//Definimos la información que vamos a enviar
		data: formData,
		//Deshabilitamos el caché
		cache: false,
		//No especificamos el contentType
		contentType: false,
		//No permitimos que los datos pasen como un objeto
		processData: false
	}).done(function(echo){
		//Cuando recibamos respuesta, la mostramos
		
		mensaje.html(echo);
		mensaje.slideDown(500); });
});





// FORMULARIO ALTA CPU
//Cuando el formulario con ID add se envíe...
$("#formCpu").on("submit", function(e){
	//Evitamos que se envíe por defecto
	e.preventDefault();
	//Creamos un FormData con los datos del mismo formulario
	var formData = new FormData(document.getElementById("formCpu"));

	//Llamamos a la función AJAX de jQuery
	$.ajax({
		//Definimos la URL del archivo al cual vamos a enviar los datos
		url: "php/cpu/agregar-cpu.php",
		//Definimos el tipo de método de envío
		type: "POST",
		//Definimos el tipo de datos que vamos a enviar y recibir
		dataType: "HTML",
		//Definimos la información que vamos a enviar
		data: formData,
		//Deshabilitamos el caché
		cache: false,
		//No especificamos el contentType
		contentType: false,
		//No permitimos que los datos pasen como un objeto
		processData: false
	}).done(function(echo){
		//Cuando recibamos respuesta, la mostramos
		
		mensaje.html(echo);
		mensaje.slideDown(500); });
});



// FORMULARIO ALTA DEPARTAMENTO
//Cuando el formulario con ID add se envíe...
$("#formDpto").on("submit", function(e){
	//Evitamos que se envíe por defecto
	e.preventDefault();
	//Creamos un FormData con los datos del mismo formulario
	var formData = new FormData(document.getElementById("formDpto"));

	//Llamamos a la función AJAX de jQuery
	$.ajax({
		//Definimos la URL del archivo al cual vamos a enviar los datos
		url: "php/departamento/agregar-departamento.php",
		//Definimos el tipo de método de envío
		type: "POST",
		//Definimos el tipo de datos que vamos a enviar y recibir
		dataType: "HTML",
		//Definimos la información que vamos a enviar
		data: formData,
		//Deshabilitamos el caché
		cache: false,
		//No especificamos el contentType
		contentType: false,
		//No permitimos que los datos pasen como un objeto
		processData: false
	}).done(function(echo){
		//Cuando recibamos respuesta, la mostramos
		
		mensaje.html(echo);
		mensaje.slideDown(500); });
});




// FORMULARIO ALTA PERSONAL
//Cuando el formulario con ID add se envíe...
$("#formPersonal").on("submit", function(e){
	//Evitamos que se envíe por defecto
	e.preventDefault();
	//Creamos un FormData con los datos del mismo formulario
	var formData = new FormData(document.getElementById("formPersonal"));

	//Llamamos a la función AJAX de jQuery
	$.ajax({
		//Definimos la URL del archivo al cual vamos a enviar los datos
		url: "php/personal/agregar-personal.php",
		//Definimos el tipo de método de envío
		type: "POST",
		//Definimos el tipo de datos que vamos a enviar y recibir
		dataType: "HTML",
		//Definimos la información que vamos a enviar
		data: formData,
		//Deshabilitamos el caché
		cache: false,
		//No especificamos el contentType
		contentType: false,
		//No permitimos que los datos pasen como un objeto
		processData: false
	}).done(function(echo){
		//Cuando recibamos respuesta, la mostramos
	
		mensaje.html(echo);
		mensaje.slideDown(500); });
});












}


