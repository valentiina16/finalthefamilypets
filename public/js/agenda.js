document.addEventListener("DOMContentLoaded", function () {
    let formulario = document.getElementById("formulario");

    var calendarEl = document.getElementById("agenda");

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",

        locale: "es",
    
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,listWeek",
        },

        events: "http://127.0.0.1:8000/evento/mostar",

        dateClick: function (info) {
           formulario.reset();
            formulario.start.value = info.dateStr;
            formulario.end.value = info.dateStr;
            formulario.hora_inicio.value = info.dateStr;
            formulario.hora_final.value = info.dateStr;

            $("#evento").modal("show");

        },
        eventClick: function (info) {
            var evento = info.event;
            console.log(evento);

            axios
                .post(baseURL + "/evento/editar/" + info.event.id)
                .then((respuesta) => {
                    formulario.id.value = respuesta.data.id;
                    formulario.start.value = respuesta.data.start;
                    formulario.end.value = respuesta.data.end;
                    formulario.hora_inicio.value = respuesta.data.hora_inicio;
                    formulario.hora_final.value = respuesta.data.hora_final;

                    $("#evento").modal("show");
                })
                .catch((error) => {
                    if (error.response) {
                        console.log(error.response.data);
                    }
                });
        },
    });
    calendar.render();

    document
        .getElementById("btnGuardar")
        .addEventListener("click", function () {
            enviarDatos("/evento/agregar");
        });
    document
        .getElementById("btnEliminar")
        .addEventListener("click", function () {
            enviarDatos("/evento/borrar/" + formulario.id.value);
        });
    document
        .getElementById("btnModificar")
        .addEventListener("click", function () {
            enviarDatos("/evento/actualizar/" + formulario.id.value);
        });
    function enviarDatos(url) {
        const datos = new FormData(formulario);
    

        nuevaURL = baseURL + url;

        axios
            .post(nuevaURL, datos)
            .then((respuesta) => {
                calendar.refetchEvents();
                $("#evento").modal("hide");
            })
            .catch((error) => {
                if (error.response) {
                    console.log(error.response.data);
                }
            });
    }
});


      
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', valida_envia); 
  });
  function valida_envia(){
    //valido el evento
    //if (document.fvalida.titulo_evento.value.length==0){
    //       alert("Tiene que escribir su evento ")
    //       document.fvalida.titulo_evento.focus()
    //      return 0;
    //}
 

    //valido el star
    if (document.fvalida.start.value.length==0){
           alert("seleccione fecha")
           document.fvalida.start.focus()
           return 0;
    }
 
      //valido el end
      if (document.fvalida.end.value.length==0){
        alert("seleccione fecha")
        document.fvalida.end.focus()
        return 0;
 }

 if (document.fvalida.hora_inicio.value.length==0){
    alert("agrege la hora")
    document.fvalida.hora_inicio.focus()
    return 0;
}

//valido el end
if (document.fvalida.hora_final.value.length==0){
 alert("agrege la hora")
 document.fvalida.hora_final.focus()
 return 0;
}

    //el formulario se envia
    alert("Fecha agendada exitosamente");
    document.fvalida.submit();

  }


