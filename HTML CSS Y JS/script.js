document.addEventListener("DOMContentLoaded", function() {
    function updateDateTime() {
        const dateElement = document.getElementById("fecha-actual");
        const timeElement = document.getElementById("hora-actual");
        const now = new Date();

        const dateOptions = { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric' 
        };
        
        const formattedDate = now.toLocaleDateString('es-ES', dateOptions);

        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        const formattedTime = `${hours}:${minutes}:${seconds}`;

        dateElement.textContent = formattedDate;
        timeElement.textContent = formattedTime;
    }

    updateDateTime();
    setInterval(updateDateTime, 1000);
});

// datos del ticket

// function datosTickets() {
//     var formulario = document.getElementsByName('formIt')[0];
//         elementos = formIt.elements;
//         boton = document.getElementById('btn');

//     var validarNombre = function(e){
//         if(formIt.nombre.value == 0){
//             alert("completa el campo nombre");
//             e.preventDefault();
//         }
//     }

    
//     var validar = function(e){
//         validarNombre(e);
//     }

//     formulario.addEventListener("submit",validar);

// }

// datosTickets();
