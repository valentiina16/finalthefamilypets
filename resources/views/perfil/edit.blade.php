@extends('layouts.perfil', [ 'titlePage' => ''])
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 m-auto">
            <form action="{{ route('perfil.update',$user->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card" style="margin-left: -40px">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Usuario</h4>
                    <p class="card-category">Editar datos</p>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <label for="nombre_usuario" class="col-sm-2 col-form-label">Nombre</label>
                          <div class="col-sm-7">
                              <input type="text" class="form-control" name="nombre_usuario" value="{{old('nombre_usuario', $user->nombre_usuario) }}" autofocus>
                              @if ($errors->has('nombre_usuario'))<span class="error text-danger" for="input-nombre_usuario">{{ $errors->first('nombre_usuario') }}</span>
                              @endif
                            </div>
                        </div>

                        <div class="row">
                          <label for="name" class="col-sm-2 col-form-label">Apellido</label>
                          <div class="col-sm-7">
                              <input type="text" class="form-control" name="apellido" value="{{old('apellido', $user->apellido) }}">
                              @if ($errors->has('apellido'))<span class="error text-danger" for="input-apellido">{{ $errors->first('apellido') }}</span>
                              @endif
                            </div>
                        </div>

                         {{-- Direccion--}}
                      <div class="row">
                        <label for="direccion_usuario" class="col-sm-2 col-form-label">Direccion</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="direccion_usuario" placeholder="Ingresa su direccion" value="{{ old('direccion_usuario', $user->direccion_usuario) }}">
                            @if ($errors->has('direccion'))<span class="error text-danger" for="input-direccion_usuario">{{ $errors->first('direccion_usuario') }}</span>
                          @endif
                          </div>
                      </div>

                       {{-- Cedula--}}
                       <div class="row">
                        <label for="cedula" class="col-sm-2 col-form-label">Cedula</label>
                        <div class="col-sm-7">
                            <input type="numeric" class="form-control" name="cedula" placeholder="Ingresa su cedula" value="{{ old('cedula',$user->cedula) }}">
                            @if ($errors->has('cedula'))<span class="error text-danger" for="input-cedula">{{ $errors->first('cedula') }}</span>
                          @endif
                          </div>
                      </div>

                       {{-- Celular--}}
                       <div class="row">
                        <label for="celular_usuario" class="col-sm-2 col-form-label">Celular</label>
                        <div class="col-sm-7">
                            <input type="numeric" class="form-control" name="celular_usuario" placeholder="Ingresa su celular" value="{{ old('celular_usuario',$user->celular_usuario) }}">
                            @if ($errors->has('celular_usuario'))<span class="error text-danger" for="input-celular_usuario">{{ $errors->first('celular_usuario') }}</span>
                          @endif
                          </div>
                      </div>

                       {{-- Foto--}}
                       <div class="row">
                        <label for="foto_usuario" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-7">
                            <input accept="image/*"  type="file" class="form-control" name="foto_usuario" value="{{$user->foto_usuario }}" onchange="vistaPrevia(event)">
                            @if ($errors->has('foto_usuario'))<span class="error text-danger" for="input-foto_usuario">{{ $errors->first('foto_usuario') }}</span>
                          @endif

                        </div>
                        <div class="imagen col-md-6 col-lg-6 col-sm-12 contenedor_foto">
                            <label for="">Vista previa fotografia</label><br>
                            <img class="FotoF" src="{{asset('img/fotos/' .$user->foto_usuario)}}" id="img-foto" alt="">
                        </div>
                      </div>

                        <div class="row">
                            <label for="username" class="col-sm-2 col-form-label">Nombre de usuario</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="username" value="{{ old('username', $user->username) }}">
                                @if ($errors->has('username'))
                                  <span class="error text-danger" for="input-username">{{ $errors->first('username') }}</span>
                                @endif
                              </div>
                          </div>
                          <div class="row">
                            <label for="email" class="col-sm-2 col-form-label">Correo</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                                @if ($errors->has('email'))
                                  <span class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                                @endif
                              </div>
                          </div>
                          <div class="row">
                            <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña sólo en caso de modificarla">
                                @if ($errors->has('password'))
                                  <span class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                                @endif
                              </div>
                          </div>

                    <!--footer-->
                    <div class="card-footer">
                    <div class="button-container m-auto">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="{{ route('perfil.show')}}" class="btn btn-success">Volver</a>
                        </div>
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
