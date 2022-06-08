var tabla = [
    { nombre: "Miguel Matos", parentezco: "Primo", edad: 25, telefono: "809-324-8901"},
    { nombre: "Ester Cabrera", parentezco: "Tia", edad: 30, telefono: "809-324-8801"},
    { nombre: "Victor Estevez", parentezco: "Padre", edad: 43, telefono: "809-324-8802"},
    { nombre: "Angelina Pascual", parentezco: "Hermana", edad: 37, telefono: "809-325-8801"}
];

window.onload = cargarEventos;

function cargarEventos(){
    document.getElementById("mostrar-tabla").addEventListener("click", mostrarTabla, false);
    document.getElementById("nuevo-familiar").addEventListener("submit", nuevoFamiliar,false);
}
function mostrarTabla(){
    var cuerpoTabla = document.getElementById("familiar-tabla");
    var tablaLlena = "";

    for (var i = 0; i < tabla.length; i++){
        tablaLlena += "<tr><td>" + tabla[i].nombre + "</td><td>" + tabla[i].parentezco + "</td><td>"+ tabla[i].edad + "</td><td>" + tabla[i].telefono + "</td></tr>";
    }

    cuerpoTabla.innerHTML = tablaLlena;
}

function nuevoFamiliar(event){
    event.preventDefault();

    var familiarIntroducidoPorUsuario = document.getElementById("nombre").value;
    var parentezcoIntroducidoPorUsuario = document.getElementById("parentezco").value;
    var edadIntroducidaPorUsuario = document.getElementById ("edad").value;
    var telefonoIntroducidaPorUsuario = document.getElementById ("telefono").value;

    var nuevoFamiliar = { nombre: familiarIntroducidoPorUsuario, parentezco: parentezcoIntroducidoPorUsuario, edad: edadIntroducidaPorUsuario, 
         telefono: telefonoIntroducidaPorUsuario };
    tabla.push(nuevoFamiliar);
}