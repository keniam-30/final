var tabla = [
    { enfermedad: "Leucemia", tiempo: "4 años", detalle: "Mareos muy severos"},
    { enfermedad: "Gripe", tiempo: "1 año", detalle: "Mucha flema"},
    { enfermedad: "Covid 19", tiempo: "2 años", detalle: "Perdida del gusto"},
    { enfermedad: "Hipertencion alta", tiempo: "3 ños", detalle: "Nauseas"}
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