@extends('layouts.main', ['activePage' => 'pets', 'titlePage' => 'Mascotas'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Mascotas</h4>
                                <p class="card-category">mascotas registradas</p>
                            </div>
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <div class="row">
                <div class="col-12 text-right">
                    <a href="{{ route('pets.create') }}" class="a btn btn-sm btn-facebook">Añadir mascota</a>
                </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Edad</th>
                    <th>Raza</th>
                    <th>Tamaño</th>
                    <th>Sexo</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Foto</th>
                    <th>Publicada</th>
                    <th class="text-right">Acciones</th>
                </thead>
                <tbody>
                  @forelse ($pets as $pet)
                  <tr>
                    <td>{{$pet->id}} </td>
                                                    <td>{{$pet->nombre_masc}}</td>
                                                    <td>{{$pet->estado}}</td>
                                                    <td>{{$pet->raza_masc}}</td>
                                                    <td>{{$pet->tamaño_masc}}</td>
                                                    <td>{{$pet->sexo_masc}}</td>
                                                    <td>{{$pet->tipo_masc}}</td>
                                                    <td>{{$pet->edad_masc}}</td>
                                                    <td>{{$pet->descripcion_masc}}</td>
                                                    <td>
                                                      {{--<div class="imagen">
                                                            <img class="img-fluid" src="{{asset('img/fotos/'.$pet->foto_masc)}}" alt="" width="70px">
                                                        </div>--}}
                                                        <div class="imagen">
                                                            <img class="img-fluid" src="{{asset('img/fotos/'.$pet->foto_masc1)}}" alt="" width="70px">
                                                        </div>
                                                        </td>
                    <td class="text-primary">{{ $pet->created_at->toFormattedDateString() }}</td>
                    <td class="td-actions text-right">
                      <a href="{{ route('pets.show', $pet->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                      <a href="{{ route('pets.edit', $pet->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                      <form action="{{ route('pets.destroy', $pet->id) }}" method="post"
                        onsubmit="return confirm('¿Estas seguro de eliminar esta mascota?')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
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
          <!--Footer-->
          <div class="card-footer mr-auto">
            {{ $pets->links() }}
          </div>
        </div>
    </div>
</div>
</div>

</div>
</div>
</div>
@endsection
