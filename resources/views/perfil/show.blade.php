@extends('layouts.perfil', [ 'titlePage' =>'Perfil'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="margin-left: -40px">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Perfil</h4>
                                <p class="card-category">{{$user->nombre_usuario}}</p>
                            </div>

                            <div class="card1">
                                <div>
                             @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif</div>
                                <div style="width: 350px">
                                    <div >
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <div class="author">

                                                        <a href="">
                                                            <img class="FotoF"  src="{{asset('img/fotos/' .$user->foto_usuario)}}" id="img-foto" alt="">
                                                            <h5 class="title mt-3">{{$user->nombre_usuario}}</h5>
                                                        </a>
                                                        <p class="description">
                                                            {{$user->apellido}} <br>
                                                            {{$user->direccion_usuario}} <br>
                                                            {{$user->cedula}} <br>
                                                            {{$user->celular_usuario}} <br>
                                                            {{$user->username}} <br>
                                                            {{$user->email}} <br>
                                                            {{$user->created_at}} <br>


                                                        </p>

                                                    </div>
                                                </p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="button-container">
                                                    <a href="{{ url('/adopcion')}}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                   
                                                   <a href="{{ route('perfil.edit', $user->id) }}"><button  class="btn btn-sm btn-primary">Editar</button > </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div >
                                        <div class="card card-user">
                                            <div class="card-body">

                                                <form class="navbar-form">
                                                    <div>
                                                        <select  name="id_user" hidden id="userFilter" style="text-align: center">
                                                            <option selected="true">{{$user->id}}</option>
                                                        </select>
                                                    </div>
                                                    <div>

                                                </div>
                                                  </form>

                                                  <div>
                                                    <table class="table" name="adopciones">
                                                        <thead class="text-primary">
                                                            <th>Fecha inicial</th>
                                                            <th>Fecha final</th>
                                                            <th>hora inicial</th>
                                                            <th>hora final</th>
                                                            <th>Estado</th>
                                                            <th>fundación</th>
                                                            <th>Direccion</th>
                                                            <th>nombre mascota</th>
                                                            <th>foto</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($pets as $pet)
                                                            <tr>
                                                                <td>{{$pet->fecha_solic_inic}}</td>
                                                                <td>{{$pet->fecha_solic_final}}</td>
                                                                <td>{{$pet->hora_solic_inic}}</td>
                                                                <td>{{$pet->hora_solic_final}}</td>
                                                                <td>{{$pet->estado_masc}}</td>
                                                               <td>{{$pet->nombre_usuario}}</td>
                                                               <td>{{$pet->direccion_usuario}}</td>
                                                               <td>{{$pet->nombre_masc}}</td>
                                                               <td> <img class="fotoF img_adopt " style="margin-left: 0%; width: 100%" src="{{asset('img/fotos/'.$pet->foto_masc1)}}"></td>
                                                               <td><a  target="_blank" href="{{ route('perfil.pdf')}}" class="btn btn-sm btn-success mr-3">descargar</a><a href='delete/{{ $pet->id_pet }}' class="btn btn-sm btn-danger mr-3" onclick="return Eliminar()">Cancelar cita</a></td>
                                                             
                                                            </tr>
                                                          
                                                            @endforeach
                                                           



                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script language="javascript" type ="text/javascript">
  function Eliminar() {
      return confirm('¿Está seguro de salir de cancelar tu cita?');
  }
</script>
@endsection

