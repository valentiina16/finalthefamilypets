{{--@extends('layouts.main', ['activePage' => 'calendars', 'titlePage' => 'calendario'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('calendars.store') }}" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">calendario</h4>
              <p class="card-category">Ingresar fechas</p>
            </div>
            <div class="card-body">

            <!--End header-->
            <!--Body-->


            {{-- Nit
           <div class="row">
            <label for="titulo_evento" class="col-sm-2 col-form-label">evento</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="titulo_evento" placeholder="ingrese evento" value="{{ old('titulo_evento') }}">
                @if ($errors->has('titulo_evento'))<span class="error text-danger" for="input-titulo_evento">{{ $errors->first('titulo_evento') }}</span>
              @endif
              </div>
          </div>
           {{-- Nombre
           <div class="row">
            <label for="descripcion_evento" class="col-sm-2 col-form-label">descripcion</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="descripcion_evento" placeholder="Ingresa descripcion del evento" value="{{ old('descripcion_evento') }}">
                @if ($errors->has('descripcion_evento'))<span class="error text-danger" for="input-descripcion_evento">{{ $errors->first('descripcion_evento') }}</span>
              @endif
              </div>
          </div>

          {{-- star
          <div class="row">
            <label for="start" class="col-sm-2 col-form-label">fecha inicial</label>
            <div class="col-sm-7">
            <input type="datetime-local" id="start" name="start"
                   value="2022-07-22 00:00:00"
                   min="2022-01-01 00:00:00" max="2022-12-31 23:59:59"  value="{{ old('start') }}">

            @if ($errors->has('start'))<span class="error text-danger" for="input-start">{{ $errors->first('start') }}</span>
          @endif
          </div>
      </div>

       {{-- end
    <div class="row">
        <label for="end" class="col-sm-2 col-form-label">fecha final</label>
        <div class="col-sm-7">
        <input type="datetime-local" id="end" name="end"
        value="2022-07-22 00:00:00"
        min="2022-01-01 00:00:00" max="2022-12-31 23:59:59"  value="{{ old('end') }}">
          @if ($errors->has('end'))<span class="error text-danger" for="input-end">{{ $errors->first('end') }}</span>
        @endif
        </div>
    </div>

    <input type="hidden" name="id_user" value="{{$user->id}}">



            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>




@endsection--}}

