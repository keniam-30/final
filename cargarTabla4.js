var tabla = [
    { fecha: "2022-05-04", centroM: "Oncológico", diagnostico: "Cancer de mama, se recomienda tratamiento inmediato"},
    { fecha: "2022-06-04", centroM: "El integral", diagnostico: "Gripe, se indica medicamento"},
    { fecha: "2022-07-04", centroM: "Oriental", diagnostico: "Miopia, se indica lentes nuevos"}
];

window.onload = cargarEventos;

function cargarEventos(){
    document.getElementById("mostrar-tabla").addEventListener("click", mostrarTabla, false);
    document.getElementById("nuevo-internamiento").addEventListener("submit", nuevoInternamiento,false);
}
function mostrarTabla(){
    var cuerpoTabla = document.getElementById("internamiento-tabla");
    var tablaLlena = "";

    for (var i = 0; i < tabla.length; i++){
        tablaLlena += "<tr><td>" + tabla[i].fecha + "</td><td>" + tabla[i].centroM + "</td><td>"+ tabla[i].diagnostico + "</td></tr>";
    }

    cuerpoTabla.innerHTML = tablaLlena;
}

function nuevoInternamiento(event){
    event.preventDefault();

    var fechaIntroducidoPorUsuario = document.getElementById("fecha").value;
    var centroMIntroducidoPorUsuario = document.getElementById("centroM").value;
    var diagnosticoIntroducidaPorUsuario = document.getElementById ("diagnostico").value;


    var nuevoInternamiento = { fecha: fechaIntroducidoPorUsuario, centroM: centroMIntroducidoPorUsuario, diagnostico: diagnosticoIntroducidaPorUsuario };
    tabla.push(nuevoInternamiento);
}