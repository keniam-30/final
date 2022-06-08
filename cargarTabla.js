var tabla = [
    { nombre: "Miguel Matos", sexo: "Masculino", edad: 25, direccion: "carr 54 calinas del oriente El brisal", telefono: "809-324-8901"},
    { nombre: "Ester Cabrera", sexo: "Femenino", edad: 30, direccion: "calle 22 amazonas", telefono: "809-324-8801"},
    { nombre: "Victor Estevez", sexo: "Masculino", edad: 43, direccion: "calle 4 El almirante", telefono: "809-324-8802"},
    { nombre: "Angelina Pascual", sexo: "Femenino", edad: 37, direccion: "calle 15 Las Palmas", telefono: "809-325-8801"}
];

window.onload = cargarEventos;

function cargarEventos(){
    document.getElementById("mostrar-tabla").addEventListener("click", mostrarTabla, false);
    document.getElementById("nuevo-paciente").addEventListener("submit", nuevoPaciente,false);
}
function mostrarTabla(){
    var cuerpoTabla = document.getElementById("paciente-tabla");
    var tablaLlena = "";

    for (var i = 0; i < tabla.length; i++){
        tablaLlena += "<tr><td>" + tabla[i].nombre + "</td><td>" + tabla[i].sexo + "</td><td>"+ tabla[i].edad + "</td><td>"+ tabla[i].direccion + "</td><td>" + tabla[i].telefono + "</td></tr>";
    }

    cuerpoTabla.innerHTML = tablaLlena;
}

function nuevoPaciente(event){
    event.preventDefault();

    var pacienteIntroducidoPorUsuario = document.getElementById("paciente").value;
    var sexoIntroducidoPorUsuario = document.getElementById("sexo").value;
    var edadIntroducidaPorUsuario = document.getElementById ("edad").value;
    var direccionIntroducidaPorUsuario = document.getElementById ("direccion").value;
    var telefonoIntroducidaPorUsuario = document.getElementById ("telefono").value;

    var nuevoPasiente = { nombe: pacienteIntroducidoPorUsuario, sexo: sexoIntroducidoPorUsuario, edad: edadIntroducidaPorUsuario, 
        direccion: direccionIntroducidaPorUsuario, telefono: telefonoIntroducidaPorUsuario };
    tabla.push(nuevoPasiente);
}