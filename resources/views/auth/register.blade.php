@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('TheFamilyPets')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Registrarse') }}</strong></h4>
          <!--  <div class="social-line">
              <a href="#" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-instagram"></i>
              </a>
              <a href="#" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>-->
          </div>
          <div class="card-body ">
          {{--<p class="card-description text-center">{{ __('Or Be Classical') }}</p>--}}



            <!--nombre-->
            <div class="bmd-form-group{{ $errors->has('nombre_usuario') ? ' has-danger' : '' }}">
              <div class="input-group" >
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="nombre_usuario" class="form-control" placeholder="{{ __('Nombre...') }}" value="{{ old('nombre_usuario') }}" maxlength="30" required autocomplete="nombre_usuario" autofocus >
              </div>
              @if ($errors->has('nombre_usuario'))
                <div id="nombre_usuario-error" class="error text-danger pl-3" for="nombre_usuario" style="display: block;">
                  <strong>{{ $errors->first('nombre_usuario') }}</strong>
                </div>
              @endif
            </div>


             

            <!--apellido-->
            <div  class="bmd-form-group{{ $errors->has('apellido') ? ' has-danger' : '' }}">
              <div class="input-group-prepend">
                <div class="input-group" >
                  <span class="input-group-text">
                    <i class="material-icons">face</i></span>

                  <input type="text"  maxlength="30"  name="apellido" class="form-control" placeholder="{{ __('Apellido...') }}" value="{{ old('apellido') }}">
                </div>
              </div>
              @if ($errors->has('apellido'))
                <div id="apellido-error" class="error text-danger pl-3" for="apellido" style="display: block;">
                  <strong>{{ $errors->first('apellido') }}</strong>
                </div>
              @endif
            </div>
            <!--direccion-->
            <div class="bmd-form-group{{ $errors->has('direccion_usuario') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">maps_home_work</i>
                    </span>

                    
                  </div>
                  <input type="text" name="direccion_usuario"  maxlength="50" class="form-control" placeholder="{{ __('Direccion...') }}" value="{{ old('direccion_usuario') }}" required autocomplete="direccion_usuario">
                </div>
                @if ($errors->has('direccion_usuario'))
                  <div id="direccion_usuario-error" class="error text-danger pl-3" for="direccion_usuario" style="display: block;">
                    <strong>{{ $errors->first('direccion_usuario') }}</strong>
                  </div>
                @endif
              </div>

            <!--cedula-->
            <div class="bmd-form-group{{ $errors->has('cedula') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">badge</i>
                    </span>
                  </div>
                  <input type="number" name="cedula" maxlength="10" class="form-control" placeholder="{{ __('Cedula...') }}" value="{{ old('cedula') }}" required autocomplete="cedula">
                </div>
                @if ($errors->has('cedula'))
                  <div id="cedula-error" class="error text-danger pl-3" for="cedula" style="display: block;">
                    <strong>{{ $errors->first('cedula') }}</strong>
                  </div>
                @endif
              </div>

              <!--celular-->
            <div class="bmd-form-group{{ $errors->has('celular_usuario') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">settings_phone</i>
                    </span>
                  </div>
                  <input type="number" name="celular_usuario" class="form-control" placeholder="{{ __('Celular...') }}" value="{{ old('celular_usuario') }}" required autocomplete="celular_usuario">
                </div>
                @if ($errors->has('celular_usuario'))
                  <div id="celular_usuario-error" class="error text-danger pl-3" for="celular_usuario" style="display: block;">
                    <strong>{{ $errors->first('celular_usuario') }}</strong>
                  </div>
                @endif
              </div>

              <!--foto-->
              <div class="bmd-form-group{{ $errors->has('foto_usuario') ? ' has-danger' : '' }} mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">camera_enhance</i>
                    </span>
                  </div>
                  <input type="file" name="foto_usuario" class="form-control" placeholder="{{ __('Foto...') }}" value="{{ old('foto_usuario') }}" required autocomplete="foto_usuario">
                </div>
                @if ($errors->has('foto_usuario'))
                  <div id="foto_usuario-error" class="error text-danger pl-3" for="foto_usuario" style="display: block;">
                    <strong>{{ $errors->first('foto_usuario') }}</strong>
                  </div>
                @endif
              </div>

              <!--username-->
              <div class="bmd-form-group{{ $errors->has('username') ? ' has-danger' : '' }} mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">fingerprint</i>
                    </span>
                  </div>
                  <input type="text" name="username"  maxlength="25" class="form-control" placeholder="{{ __('Nombre de usuario...') }}" value="{{ old('username') }}" required autocomplete="username">
                </div>
                @if ($errors->has('username'))
                  <div id="username-error" class="error text-danger pl-3" for="username" style="display: block;">
                    <strong>{{ $errors->first('username') }}</strong>
                  </div>
                @endif
              </div>


            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email"  class="form-control" placeholder="{{ __('Correo electrónico...') }}" value="{{ old('email') }}" required autocomplete="name" >
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>



            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input ID="txtPassword" type="password"   name="password" id="password" class="form-control" placeholder="{{ __('Contraseña...') }}" required autocomplete="new-password">
                <div class="input-group-append">
                  <button id="show_password" class="btn btn-primary" style="margin-top: -5px;height:40px" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                </div>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input  type="Password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirmar contraseña...') }}" required autocomplete="new-password">
                
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>

           {{-- <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('I agree with the ') }} <a href="#">{{ __('Privacy Policy') }}</a>
              </label>
            </div>--}}
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg" >{{ __('Crear cuenta') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  function mostrarPassword(){
      var cambio = document.getElementById("txtPassword");
      
      if(cambio.type == "password"){
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
      }else{
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
      }
    } 
    
    $(document).ready(function () {
    //CheckBox mostrar contraseña
    $('#ShowPassword').click(function () {
      $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
    });
  });
  </script>




@endsection

