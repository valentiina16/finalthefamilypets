
@extends('layouts.main', ['activePage' => 'calendars', 'titlePage' => 'calendario'])

@section('content')

<link href="css/modalcalendario.css" rel="stylesheet">

<div class="content">
   
    <div class="container-fluid">
        <form>

                <a href="#modal1" class="boton">Tutorial de uso calendario</a>
          
            <div id="modal1" class="modalmask">
                <div class="modalbox movedown">
                    <a href="#close" title="Close" class="close1">X</a>
                    <h2>Como debes usar el calendario</h2>
                    
                    <video width="500" controls>
                        <source src="#" type="video/mp4">
                    </video>
                </div>
            </div>
           
            </form>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary" >
                                <h4 class="card-title">Calendario</h4>

                            </div>
                     <div class="container" style="margin-top: 10px">
                     <div id="agenda"></div>
                        </div>
                        

    <!-- Modal -->

    <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Datos del evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form  id="formulario" action="" name="fvalida">

                        {!! @csrf_field() !!}

                        <div class="mb-3 d-none">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId"
                                placeholder="">
                            <small id="helpId" class="form-text text-muted"></small>
                            
                        </div>

                       {{-- <div class="mb-3">
                            <label for="titulo_evento" class="form-label">Titulo</label>
                            <input type="text" class="form-control" name="titulo_evento" id="titulo_evento"
                                aria-describedby="helpId" placeholder="Escribe el titulo del evento">
                            <small id="helpId" class="form-text text-muted"></small>
                           
                        </div>

                       <div class="form-group">
                            <label for="descripcion_evento">Descripcion del evento</label>
                            <textarea class="form-control" name="descripcion_evento" id="descripcion" rows="3"></textarea>
                        </div>--}} 

                        <div class="mb-3">
                            <label for="start" class="form-label">fecha inicio</label>
                          <input type="text" class="form-control" name="start" required id="start" aria-describedby="helpId"
                            placeholder="00:00:00" >

                             {{--<input type="text" id="start" name="start" class="form-control"
                            value="2022-07-22 00:00:00"
                            min="2022-01-01 00:00:00" max="2022-12-31 23:59:59"  value="{{ old('start') }}"> --}}
                                
                          
                        </div>

                        <div class="mb-3">
                            <label for="end" class="form-label">Fecha Final</label>
                              <input type="text"  class="form-control" name="end" required id="end" aria-describedby="helpId"
                                placeholder="">

                             {{-- <input type="text" id="end" name="end" class="form-control"
                                value="2022-07-22 00:00:00"
                                min="2022-01-01 00:00:00" max="2022-12-31 23:59:59"  value="{{ old('end') }}">--}}
                           
                        </div>  

                        <div class="mb-3">
                            <label for="hora_inicio" class="form-label" > Hora Inicial </label>
                             <input type="time" class="form-control" name="hora_inicio" required id="hora_inicio" aria-describedby="helpId"
                            >

                          {{--<input type="time" id="horainicio" name="start" class="form-control"
                            value="2022-07-22 00:00:00"
                            min="2022-01-01 00:00:00" max="2022-12-31 23:59:59"  value="{{ old('horainicio') }}"> --}}
                                
                          
                        </div>

                        <div class="mb-3">
                            <label for="hora_final" class="form-label">Hora final</label>
                             <input type="time" class="form-control" name="hora_final" required id="hora_final" aria-describedby="helpId"
                            >

                         {{-- <input type="time" id="horafinal" name="horafinal" class="form-control"
                            value="2022-07-22 00:00:00"
                            min="2022-01-01 00:00:00" max="2022-12-31 23:59:59"  value="{{ old('horafinal') }}"> --}}
                                
                          
                        </div>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnGuardar" onclick="valida_envia()">Guardar</button>
                    <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
@endsection

{{--<script>
    // Obtener referencias 
    const $formulario = document.querySelector("#formulario"),
        $start = document.querySelector("#start"),
        $end = document.querySelector("#end");
    $formulario.onsubmit = evento => {
        evento.preventDefault();
        const start = $start.value,
        end = $end.value;
        // Validar
        if (start === "Luis" || start === "José") {
            alert("No pueden ser esos nombres");
            return;
        }
        if (end.endsWith("@hotmail.com")) {
            alert("No puede ser de hotmail");
            return;
        }
        $formulario.submit();
    };
</script>--}}

