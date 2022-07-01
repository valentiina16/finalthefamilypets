@extends('layouts.main', ['activePage' => 'foundations', 'titlePage' => 'Editar fundacion'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('foundations.update', $foundation->id) }}" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Editar mascota</h4>
              <p class="card-category">Editar datos de la mascota</p>
            </div>
            <!--End header-->
            <!--Body-->


          {{-- Nit--}}
          <div class="row">
            <label for="nit_fundacion" class="col-sm-2 col-form-label">Nit</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="nit_fundacion" placeholder="Ingresa nit de la fundacion" value="{{ old('nit_fundacion', $foundation->nit_fundacion) }}">
                @if ($errors->has('nit_fundacion'))<span class="error text-danger" for="input-nit_fundacion">{{ $errors->first('nit_fundacion') }}</span>
              @endif
              </div>
          </div>
           {{-- Nombre--}}
           <div class="row">
            <label for="nombre_fundacion" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="nombre_fundacion" placeholder="Ingresa nombre de la fundacion" value="{{ old('nombre_fundacion', $foundation->nombre_fundacion) }}">
                @if ($errors->has('nombre_fundacion'))<span class="error text-danger" for="input-nombre_fundacion">{{ $errors->first('nombre_fundacion') }}</span>
              @endif
              </div>
          </div>

          {{-- direccion--}}
          <div class="row">
            <label for="direccion_fundacion" class="col-sm-2 col-form-label">Direccion </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="direccion_fundacion" placeholder="Ingrese la direccion" value="{{ old('direccion_fundacion', $foundation->direccion_fundacion)}}">
                @if ($errors->has('direccion_fundacion'))<span class="error text-danger" for="input-direccion_fundacion">{{ $errors->first('direccion_fundacion') }}</span>
              @endif
              </div>
          </div>

           {{-- contacto--}}
        <div class="row">
          <label for="contacto_fundacion" class="col-sm-2 col-form-label">Contacto</label>
          <div class="col-sm-7">
              <input type="text" class="form-control" name="contacto_fundacion" placeholder="Ingrese el contacto" value="{{ old('contacto_fundacion', $foundation->contacto_fundacion)}}">
              @if ($errors->has('contacto_fundacion'))<span class="error text-danger" for="input-contacto_fundacion">{{ $errors->first('contacto_fundacion') }}</span>
            @endif
            </div>
        </div>


         {{-- Foto--}}
         <div class="row">
            <label for="foto_fundacion" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-7">
                <input accept="image/*"  type="file" class="form-control" name="foto_fundacion" value="{{$foundation->foto_fundacion }}" onchange="vistaPrevia(event)">
                @if ($errors->has('foto_fundacion'))<span class="error text-danger" for="input-foto_fundacion">{{ $errors->first('foto_fundacion') }}</span>
              @endif

            </div>
            <div class="imagen col-md-6 col-lg-6 col-sm-12 contenedor_foto">
                <label for="">Vista previa fotografia</label><br>
                <img class="FotoF" src="{{asset('img/fotos/' .$foundation->foto_fundacion)}}" id="img-foto" alt="">
            </div>
          </div>

{{-- usuario--}}
        <div class="row">
            <label for="username_fundacion" class="col-sm-2 col-form-label">usuario</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="username_fundacion" placeholder="Ingresa su nombre de usuario" value="{{ old('username_fundacion', $foundation->username_fundacion)}}">
                @if ($errors->has('username_fundacion'))<span class="error text-danger" for="input-username_fundacion">{{ $errors->first('username_fundacion') }}</span>
                @endif
              </div>
          </div>
{{-- correo--}}
          <div class="row">
            <label for="email_fundacion" class="col-sm-2 col-form-label">Correo</label>
            <div class="col-sm-7">
                <input type="email" class="form-control" name="email_fundacion" placeholder="Ingresa su correo" value="{{ old('email_fundacion', $foundation->email_fundacion) }}">
                @if ($errors->has('email_fundacion'))
                <span class="error text-danger" for="input-email_fundacion">{{ $errors->first('email_fundacion') }}</span>
              @endif
              </div>
          </div>

          {{-- contraseña--}}
          <div class="row">
            <label for="password_fundacion" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-7">
                <input type="password" class="form-control" name="password_fundacion" placeholder="Ingresa su contraseña">
                @if ($errors->has('password_fundacion'))
                <span class="error text-danger" for="input-password">{{ $errors->first('password_fundacion') }}</span>
              @endif
              </div>
          </div>

         
    </div>
    <!--footer-->
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

<script>
function ocultarAlerta() {
document.querySelector(".alert").style.display

= 'none';
}
setTimeout(ocultarAlerta, 3000);
// vista previa de la imagen
let vistaPrevia = () => {
    let leerImg = new FileReader();

    let id_img = document.getElementById('img-foto');

        leerImg.onload = () => {
            if (leerImg.readyState == 2) {
                id_img.src = leerImg.result;
            }
        }
        leerImg.readAsDataURL(event.target.files[0])
    }
</script>
@endsection

