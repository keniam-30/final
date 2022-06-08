var tabla = [
    { enfermedad: "Leucemia", tiempo: "2 años", detalle: "Mareos muy severos"},
    { enfermedad: "Gripe", tiempo: "una semana", detalle: "Mucha flema"},
    { enfermedad: "Covid 19", tiempo: "6 meses", detalle: "Perdida del gusto"},
    { enfermedad: "Hipertencion alta", tiempo: "3 años", detalle: "Nauseas"}
];

window.onload = cargarEventos;

function cargarEventos(){
    document.getElementById("mostrar-tabla").addEventListener("click", mostrarTabla, false);
    document.getElementById("nuevo-condicion").addEventListener("submit", nuevoCondicion,false);
}
function mostrarTabla(){
    var cuerpoTabla = document.getElementById("condicion-tabla");
    var tablaLlena = "";

    for (var i = 0; i < tabla.length; i++){
        tablaLlena += "<tr><td>" + tabla[i].enfermedad + "</td><td>" + tabla[i].tiempo + "</td><td>"+ tabla[i].detalle + "</td></tr>";
    }

    cuerpoTabla.innerHTML = tablaLlena;
}

function nuevoCondicion(event){
    event.preventDefault();

    var enfermedadIntroducidoPorUsuario = document.getElementById("enfermedad").value;
    var tiempoIntroducidoPorUsuario = document.getElementById("tiempo").value;
    var detalleIntroducidaPorUsuario = document.getElementById ("detalle").value;


    var nuevoCondicion = { enfermedad: enfermedadIntroducidoPorUsuario, tiempo: tiempoIntroducidoPorUsuario, detalle: detalleIntroducidaPorUsuario };
    tabla.push(nuevoCondicion);
}