@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo Usuario o Fundación'])
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
    <h3 style="margin-top: -30px;margin-left:20px">Recuerda si estas registrando una fundación no llenes el campo apellido.</h3>
        <div class="col-md-12">
            <form action="{{route('users.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Usuario / Fundación</h4>
                    <p class="card-category">Ingresar datos</p>
                  </div>
                  <div class="card-body">
                      {{-- @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
              @endif --}}

                        {{-- Nombre--}}
                      <div class="row">
                          <label for="nombre_usuario" class="col-sm-2 col-form-label">Nombre / Razón social</label>
                          <div class="col-sm-7">
                              <input type="text" class="form-control" name="nombre_usuario" placeholder="Ejm: Carlos..." value="{{ old('nombre_usuario') }}">
                              @if ($errors->has('nombre_usuario'))<span class="error text-danger" for="input-nombre_usuario">{{ $errors->first('nombre_usuario') }}</span>
                            @endif
                            </div>
                        </div>

                        {{-- Apellido--}}
                        <div class="row">
                          <label for="apellido" class="col-sm-2 col-form-label">Apellidos</label>
                          <div class="col-sm-7">
                              <input type="text" class="form-control" name="apellido" placeholder="Ejm: Lopez..." value="{{ old('apellido') }}">
                            {{--@if ($errors->has('apellido'))<span class="error text-danger" for="input-apellido">{{ $errors->first('apellido') }}</span>
                            @endif--}}  
                            </div>
                        </div>

                         {{-- Direccion--}}
                      <div class="row">
                        <label for="direccion_usuario" class="col-sm-2 col-form-label">Dirección</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="direccion_usuario" placeholder="Ejm: Calle 7 #6-06  Barrio centro" value="{{ old('direccion_usuario') }}">
                            @if ($errors->has('direccion_usuario'))<span class="error text-danger" for="input-direccion_usuario">{{ $errors->first('direccion_usuario') }}</span>
                          @endif
                          </div>
                      </div>

                       {{-- Cedula--}}
                       <div class="row">
                        <label for="cedula" class="col-sm-2 col-form-label">Cedula / NIT</label>
                        <div class="col-sm-7">
                            <input type="numeric" class="form-control" name="cedula" placeholder="Ejm: 4784578454" value="{{ old('cedula') }}">
                            @if ($errors->has('cedula'))<span class="error text-danger" for="input-cedula">{{ $errors->first('cedula') }}</span>
                          @endif
                          </div>
                      </div>

                       {{-- Celular--}}
                       <div class="row">
                        <label for="celular_usuario" class="col-sm-2 col-form-label">Celular</label>
                        <div class="col-sm-7">
                            <input type="numeric" class="form-control" name="celular_usuario" placeholder="Ejm: 3124784511" value="{{ old('celular_usuario') }}">
                            @if ($errors->has('celular_usuario'))<span class="error text-danger" for="input-celular_usuario">{{ $errors->first('celular_usuario') }}</span>
                          @endif
                          </div>
                      </div>

                       {{-- Foto--}}
                       <div class="row">
                        <label for="foto_usuario" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-7">
                            <span class="btn btn-raised btn-round btn-info btn-file">
                            <input accept="image/*" type="file" name="foto_usuario" value="{{ old('foto_usuario') }}" onchange="vistaPrevia(event)">
                            </span>
                            @if ($errors->has('foto_usuario'))<span class="error text-danger" for="input-foto_usuario">{{ $errors->first('foto_usuario') }}</span>
                          @endif

                          </div>
                        <div class="imagen col-md-6 col-lg-6 col-sm-12 contenedor_foto">
                            <label for="">Vista previa fotografia</label><br>
                            <img class="FotoF" src="" id="img-foto" alt="">
                        </div>
                      </div>

                        <div class="row">
                            <label for="username" class="col-sm-2 col-form-label">Nombre de usuario</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="username" placeholder="Ejm: @elexterminadorfeliz" value="{{ old('username') }}">
                                @if ($errors->has('username'))<span class="error text-danger" for="input-username">{{ $errors->first('username') }}</span>
                                @endif
                              </div>
                          </div>

                          <div class="row">
                            <label for="email" class="col-sm-2 col-form-label">Correo</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" name="email" placeholder="Ejm: carlos12@gmail.com" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <span class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                              @endif
                              </div>
                          </div>
                          <div class="row">
                            <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="password" placeholder="Ingresa su contraseña">
                                @if ($errors->has('password'))
                                <span class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                              @endif
                              </div>
                          </div>
                          <div class="row">
                            <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <div class="tab-content">
                                        <div class="tab-pane active">
                                            <table class="table">
                                                <tbody>
                                                    @foreach ($roles as $id => $role)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" name="roles[]"
                                                                        value="{{ $id }}"
                                                                    >
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{ $role }}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!--footer-->
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">Guardar</button>
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


