{{--@extends('layouts.main', ['activePage' => 'calendars', 'titlePage' => 'calendario'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('calendars.update', $calendar->id) }}" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Editar calendario</h4>
              <p class="card-category">Editar datos del calendario</p>
            </div>
            <!--End header-->
            <!--Body-->


          {{-- Nit
          <div class="row">
            <label for="titulo_evento" class="col-sm-2 col-form-label">Titulo evento</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="titulo_evento" placeholder="Ingresa nit de la fundacion" value="{{ old('titulo_evento', $calendar->titulo_evento) }}">
                @if ($errors->has('titulo_evento'))<span class="error text-danger" for="input-titulo_evento">{{ $errors->first('titulo_evento') }}</span>
              @endif
              </div>
          </div>
           {{-- Nombre
           <div class="row">
            <label for="descripcion_evento" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="descripcion_evento" placeholder="Ingresa nombre de la fundacion" value="{{ old('descripcion_evento', $calendar->descripcion_evento) }}">
                @if ($errors->has('descripcion_evento'))<span class="error text-danger" for="input-descripcion_evento">{{ $errors->first('descripcion_evento') }}</span>
              @endif
              </div>
          </div>

          {{-- start
          <div class="row">
            <label for="start" class="col-sm-2 col-form-label">fecha inicial</label>
            <div class="col-sm-7">
            <input type="datetime-local"  name="start"
             value="{{ old('start', $calendar->start)}}">
                @if ($errors->has('start'))<span class="error text-danger" for="input-start">{{ $errors->first('start') }}</span>
              @endif
              </div>
          </div>

           {{-- end
        <div class="row">
            <label for="end" class="col-sm-2 col-form-label">fecha final</label>
            <div class="col-sm-7">
            <input type="datetime-local" name="end"
          value="{{ old('end', $calendar->end)}}">
              @if ($errors->has('end'))<span class="error text-danger" for="input-end">{{ $errors->first('end') }}</span>
            @endif
            </div>
        </div>
            <!--End body-->
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            <!--endfooter-->
        </div>
      </form>
    </div>
</div>
</div>
</div>


@endsection--}}
