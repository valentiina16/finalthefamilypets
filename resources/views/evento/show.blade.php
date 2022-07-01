@extends('layouts.main', ['activePage' => 'calendars', 'titlePage' => 'calendario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Calendario</h4>
                                <p class="card-category">Vista dellada del calendario {{$calendar->titulo_evento}}</p>
                            </div>
          <!--End header-->
          <!--Body-->
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="row">
              <!-- first -->
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">

                        <a href="#">

                          <h5 class="title mt-3">{{$calendar->titulo_evento}}</h5>
                        </a>
                        <p class="description">
                            {{$calendar->descripcion_evento}} <br>
                            {{$calendar->start}}<br>
                            {{$calendar->end}} <br>
                            {{$calendar->hora_inicio}}<br>
                            {{$calendar->hora_final}} <br>

                        </p>
                      </div>
                    </p>

                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                        <a href="{{ route('calendars.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
                      <button type="submit" class="btn btn-sm btn-primary">Editar</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--end first-->
            </div>
            <!--end row-->
          </div>
          <!--End card body-->
        </div>
        <!--End card-->
      </div>
    </div>
  </div>
</div>
@endsection
