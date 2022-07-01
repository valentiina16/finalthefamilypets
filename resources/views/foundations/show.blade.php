@extends('layouts.main', ['activePage' => 'foundations' , 'titlePage' =>'Detalles del usuario o fundación'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Usuarios</h4>
                                <p class="card-category">Vista dellada del usuario {{$user->nombre_usuario}}</p>
                            </div>

                            <div class="card-body">
                             @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                <div class="row">
                                    <div class="col-md-4 m-auto">
                                        <div class="card card-user">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <div class="author">

                                                        <a href="">
                                                            <img class="FotoF" src="{{asset('img/fotos/' .$user->foto_usuario)}}" id="img-foto" alt="">
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
                                                            {{ $user->role }} <br>

                                                        </p>
                                                        <p>
                                                            @forelse ($user->roles as $role)
                                                              <span class="badge badge-info">{{ $role->name }}</span>
                                                            @empty
                                                              <span class="badge badge-danger">No roles</span>
                                                            @endforelse
                                                        </p>
                                                    </div>
                                                </p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="button-container">
                                                    <a href="{{ route('users.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Editar</a>
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

@endsection


