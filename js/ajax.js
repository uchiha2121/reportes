$(document).on('ready',funcAjax);



function funcAjax (){
var mensaje = $("#mensaje");
//Ocultamos el contenedor
mensaje.hide();

$("#BtnHrw").on('click',funcNuevaAjaxCPU);
//$("#BtnHrw").on('click',funcNuevaAjaxHrw);




}



function funcNuevaAjaxCPU(){



//Cuando el formulario con ID add se envíe...
$("#BtnHrw").on("submit", function(e){
	//Evitamos que se envíe por defecto
	e.preventDefault();
	//Creamos un FormData con los datos del mismo formulario
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

}






function funcNuevaAjaxHrw(){



//Cuando el formulario con ID add se envíe...
$("#BtnHrw").on("submit", function(e){
	//Evitamos que se envíe por defecto
	e.preventDefault();
	//Creamos un FormData con los datos del mismo formulario
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

}