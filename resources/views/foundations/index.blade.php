@extends('layouts.main', ['activePage' => 'foundations', 'titlePage' => 'fundaciones'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">fundacion</h4>
                                <p class="card-category">fundaciones registradas</p>
                            </div>
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success" role="success">
                {{ session('success') }}
            </div>
            @endif
           
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                    <th>ID</th>
                    <th>Nit</th>
                    <th>Nombre</th>
                    <th>direccion</th>
                    <th>username</th>
                    <th>correo</th>
                    <th>contacto</th>
                    <th>Foto</th>
                    
                </thead>
                <tbody>
                  @forelse ($foundations as $foundation)
                  <tr>
                    <td>{{$foundation->id}} </td>
                    <td>{{$foundation->cedula}}</td>
                    <td>{{$foundation->nombre_usuario}}</td>
                                            >
                                                    <td>{{$foundation->direccion_usuario}}</td>
                                                    <td>{{$foundation->username}}</td>
                                                    <td>{{$foundation->email}}</td>
                                                    <td>{{$foundation->celular_usuario}}</td>
                                                    <td>
                                                        <div class="imagen">
                                                            <img class="img-fluid" src="{{asset('img/fotos/'.$foundation->foto_usuario)}}" alt="" width="70px">
                                                        </div>
                                                        </td>
                                                        
                    
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              {{-- {{ $users->links() }} --}}
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
