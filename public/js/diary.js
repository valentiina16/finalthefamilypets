document.addEventListener('DOMContentLoaded', function() {

    let formulario = document.querySelector("form");
  var calendarEl = document.getElementById('diary');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale:"es",

    headerToolbar: {
    left: 'prev,next today',
    center: 'title',
    right: 'dayGridMonth, timeGridWeek, listWeek'
    },

    dateClick: function(info){
        $("#agenda").modal("show");
    }
  });
  calendar.render();

  document.getElementById("btnGuardar").addEventListener("click",function(){
      const datos = new FomrData(formulario);
      console.log(datos);
      axios.post("http://127.0.0.1:8000/foundations/create/agregar", datos).
      then(
          (respuesta) =>{
              $("#agenda").modal("hide");
          }
      ).catch(
          error=>{
              if(error.response){
                  console.log(error.response.data);
              }
          }
      )
  });
});


