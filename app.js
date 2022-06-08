const formulario = document.getElementById('formulario');

formulario.addEventListener('submit', (e) => {
	e.preventDefault();
	
	let datos;
	let nombres = formulario.nombre.value.trim() + ' ' + formulario.apellido.value.trim();
	let telefono = formulario.telefono.value.trim();
	let correo = formulario.correo.value.trim();

	datos = "BEGIN:VCARD", datos += "\r\nN: " + nombres + ";;;",
    datos += "\r\nFN: " + nombres, 
    telefono && (datos += "\r\nTEL;WORK,VOICE: " + telefono), correo && (datos += "\r\nEMAIL;INTERNET,HOME: " + correo),
    datos += "\r\nEND:VCARD";

	new QRCode(document.getElementById('contenedorQR'), datos);
});
