@extends('layouts.main', ['activePage' => 'preadoptions', 'titlePage' => 'Preadopciones'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Preadopciones</h4>
                                <p class="card-category">Vista dellada de citas </p>
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
              <div class="col-md-3">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">

                        <a href="#">

                          <h5 class="title mt-3">
                          <b>Fecha de solicitud : </b>  {{$preadoption->fecha_solic_inic}}</h5>
                        </a>
                        <p class="description">
                          <b>Estado : </b> {{$preadoption->estado_masc}} <br>                           
                        </p>
                        <p value="{{$preadoption->id_pet}}" class="description">
                          @foreach ($pets as $pet)
                          <p class="description">
                            <b>Usuario : </b> {{$pet->nombre_usuario}} <br>                           
                          </p>
                          <p class="description">
                            <b>Cédula : </b> {{$pet->cedula}} <br>                           
                          </p>
                          <b>Mascota : </b> {{$pet->nombre_masc}} <br> 
                          <div class="acc">
                          <img class="FotoF" src="{{asset('img/fotos/' .$pet->foto_masc1)}}" id="img-foto1" alt="">
                          
                          </div>
                          @endforeach
                        
                          <br>                           
                        </p>
                      
                      </div>
                    </p>

                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                        <a href="{{ route('preadoptions.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
                      <a href="{{ route('preadoption.edit', $preadoption->id) }}" type="submit" class="btn btn-sm btn-primary">Editar</a>
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