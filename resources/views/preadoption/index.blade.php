@extends('layouts.main', ['activePage' => 'preadoptions', 'titlePage' => 'Pre-adopcion'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Pre-adopcion</h4>
                                <p class="card-category">Citas agendadas</p>
                            </div>
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <div class="row">
                <div class="col-12 text-right">
                    <a href="{{ route('preadoptions.create') }}"></a>
                </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                    <th>ID</th>
                    <th>Fecha solicitud inicial</th>
                    <th>Fecha solicitud final</th>
                    <th>Hora solicitud inicial</th>
                    <th>Hora solicitud final</th>
                    <th>Estado</th>
                    <th>Fecha recibida</th>
                
                    <th class="text-center">Acciones</th>
                </thead>
                <tbody>
                  @forelse ($preadoption as $preadoptions)
                  <tr>
                    <td>{{$preadoptions->id}} </td>
                    <td>{{$preadoptions->fecha_solic_inic}}</td>
                    <td>{{$preadoptions->fecha_solic_final}}</td>
                    <td>{{$preadoptions->hora_solic_inic}}</td>
                    <td>{{$preadoptions->hora_solic_final}}</td>
                                                    <td>{{$preadoptions->estado_masc}}</td>
                                                  
                    <td class="text-primary">{{ $preadoptions->created_at->toFormattedDateString() }}</td>
                    <td class="td-actions text-right">
                      <a href="{{ route('preadoption.show', $preadoptions->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                      {{--<a href="{{ route('preadoption.edit', $preadoptions->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                     <form action="{{ route('preadoption.destroy', $preadoptions->id) }}" method="post"
                        onsubmit="return confirm('¿Estas seguro de eliminar esta mascota?')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>--}} 

                      <a href='delete/{{ $preadoptions->id_pet }}' rel="tooltip" class="btn btn-danger" onclick="return Eliminar()" >Cancelar preadopción</a>
                      <a href='updateM/{{ $preadoptions->id }}' rel="tooltip" class="btn btn-warning" >Adoptada</a>
                    </td>
                  </tr>

                  @empty
                  <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>
                  @endforelse

              {{-- {{ $preadoptions->links() }} --}}
             

                </tr>
              </tbody>
              </table>
              </div>
          <!--Footer-->

        </div>
    </div>
</div>
</div>

</div>
</div>
</div>
<script language="javascript" type ="text/javascript">
  function Eliminar() {
      return confirm('¿Está seguro de salir de eliminar esta preadopción?');
  }
</script>
@endsection
