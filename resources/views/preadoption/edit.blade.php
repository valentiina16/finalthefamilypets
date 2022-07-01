@extends('layouts.main', ['activePage' => 'preadoptions', 'titlePage' => 'Preadopciones'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('preadoption.update', $preadoptions->id) }}" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Editar preadopcion</h4>
              <p class="card-category">Editar datos de la preadopción</p>
            </div>
            <!--End header-->
            <!--Body-->


          
           {{-- Nombre--}}
           <div class="row">
            <label for="descripcion_preadopcion" class="col-sm-2 col-form-label">Fecha de solicitud</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="descripcion_preadopcion" placeholder="Ingresa fecha de la solicitud" value="{{ old('fecha_solic', $preadoptions->fecha_solic) }}">
                @if ($errors->has('fecha_solic'))<span class="error text-danger" for="input-fecha_solic">{{ $errors->first('fecha_solic') }}</span>
              @endif
              </div>
          </div>

          {{-- start--}}
          <div class="row">
            <label for="start" class="col-sm-2 col-form-label">fecha inicial</label>
            <div class="col-sm-7">
            <input type="datetime-local"  name="start"
             value="{{ old('start', $calendar->start)}}">
                @if ($errors->has('start'))<span class="error text-danger" for="input-start">{{ $errors->first('start') }}</span>
              @endif
              </div>
          </div>

           {{-- end--}}
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


@endsection