@extends('layouts.main', ['activePage' => 'users' , 'titlePage' =>'Usuarios'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary" >

                                    <h4 class="card-title">Usuarios</h4>
                                    <p class="card-category">Usuarios registrados</p>
                                </div>

                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif

                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('users.create') }}" class="a btn btn-sm btn-facebook">Añadir usuario o fundación</a>
                                        </div>
                                    </div>

                                    <form class="navbar-form">
                                        <div class="input-group no-border">
                                            <select name="tipo" class="form-control mr-sm-5" id="exampleFormControlSelect1">
                                                <option>Buscar por tipo</option>
                                                <option>nombre_usuario</option>
                                                <option>apellido</option>
                                                <option>cedula</option>
                                                <option>celular_usuario</option>
                                                <option>email</option>
                                              </select>
                                        <input type="search" name="buscarpor" class="form-control mr-sm-5" placeholder="Buscar por...">

                                    {{-- <input type="search" name="buscarporcedula" class="form-control mr-sm-5" placeholder="Buscar por cedula...">--}}

                                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                          <i class="material-icons">search</i>
                                          <div class="ripple-container"></div>
                                        </button>
                                        </div>
                                      </form>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Direccion</th>
                                                <th>Cedula/Nit</th>
                                                <th>Celular</th>
                                                <th>Foto</th>
                                                <th>Correo</th>
                                                <th>Username</th>
                                                <th>Registrado</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{$user->id}} </td>
                                                    <td>{{$user->nombre_usuario}}</td>
                                                    <td>{{$user->apellido}}</td>
                                                    <td>{{$user->direccion_usuario}}</td>
                                                    <td>{{$user->cedula}}</td>
                                                    <td>{{$user->celular_usuario}}</td>
                                                    <td>
                                                    <div class="imagen">
                                                        <img class="img-fluid" src="{{asset('img/fotos/'.$user->foto_usuario)}}" alt="" width="70px">
                                                    </div>
                                                    </td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->username}}</td>
                                                    <td>{{$user->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                        <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Estas seguro de eliminar este usuario o fundación?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" rel="tooltip">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
