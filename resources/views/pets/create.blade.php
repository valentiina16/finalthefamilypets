@extends('layouts.main', ['activePage' => 'pets', 'titlePage' => 'Nuevo Mascota'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('pets.store') }}" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Mascota</h4>
              <p class="card-category">Ingresar datos de la nueva mascota</p>
            </div>
 <div class="card-body">
            <!--End header-->
            <!--Body-->

            <div class="row container">
                {{-- Nombre--}}
                <div class="col">
                    <div class="input-group input-group-outline my-2">
                        <label for="nombre_masc" class="col-sm-6 col-form-label">Nombre mascota</label>
                        <input type="text" class="form-control" name="nombre_masc" placeholder="Ejm: Kira" value="{{ old('nombre_masc') }}" autofocus>
                        @if ($errors->has('nombre_masc'))<span class="error text-danger" for="input-nombre_masc">{{ $errors->first('nombre_masc') }}</span>
                      @endif
                      </div>
                </div>
                {{-- Edad--}}
                <div class="col">
                    <div class="input-group input-group-outline my-2">
                        <label for="edad_masc" class="col-sm-6 col-form-label">Edad mascota</label>
                        <input type="text" class="form-control" name="edad_masc" placeholder="Ejm:  2 meses,1 año..." value="{{ old('edad_masc') }}">
                        @if ($errors->has('edad_masc'))<span class="error text-danger" for="input-edad_masc">{{ $errors->first('edad_masc') }}</span>
                      @endif
                      </div>
                  </div>
              </div>

              {{-- Raza--}}

              <div class="row container">
                <div class="col">
                  <div class="input-group input-group-outline my-2" >
                    <label for="raza_masc" class="col-sm-6 col-form-label">Raza mascota</label>
                        <input type="text" class="form-control" name="raza_masc" placeholder="Ejm: Pincher" value="{{ old('raza_masc') }}" >
                        @if ($errors->has('raza_masc'))<span class="error text-danger" for="input-raza_masc">{{ $errors->first('raza_masc') }}</span>
                      @endif
                  </div>
                </div>
                {{-- Tamaño--}}
                <div class="col my-2">
                    <label for="tamaño_masc" class="col-sm-6 col-form-label">Tamaño mascota</label>
                         <select  name="tamaño_masc" style="text-align: center;width: 180px; border-radius: 10px">
                             <option selected="true" disabled>Seleccione el Tamaño</option>
                             <option value="Grande" {{ old('tamaño_masc') == 1 ? 'selected' : '' }}>Grande</option>
                             <option value="Mediano" {{ old('tamaño_masc') == 2 ? 'selected' : '' }}>Mediano</option>
                             <option value="Pequeño" {{ old('tamaño_masc') == 3 ? 'selected' : '' }}>Pequeño</option>
                         </select>
                         @if ($errors->has('tamaño_masc'))<span class="error text-danger" for="input-tamaño_masc">{{ $errors->first('tamaño_masc') }}</span>
                         @endif
                </div>
            </div>



                <div class="row container">
                    {{-- sexo--}}
                        <div class="col my-2">
                            <label for="sexo_masc" class="col-sm-6 col-form-label">Sexo mascota</label>
                                 <select name="sexo_masc" style="text-align: center;width: 180px; border-radius: 10px">
                                     <option selected="true" disabled>Seleccione el sexo</option>
                                     <option value="Macho" {{ old('sexo_masc') == 1 ? 'selected' : '' }}>Macho</option>
                                     <option value="Hembra" {{ old('sexo_masc') == 2 ? 'selected' : '' }}>Hembra</option>
                                 </select>
                                 @if ($errors->has('sexo_masc'))<span class="error text-danger" for="input-sexo_masc">{{ $errors->first('sexo_masc') }}</span>
                      @endif
                        </div>
                    {{-- tipo--}}
                    <div class="col my-2">
                            <label for="tipo_masc" class="col-sm-6 col-form-label">Tipo mascota</label>
                                 <select name="tipo_masc" style="text-align: center;width: 180px; border-radius: 10px">
                                     <option selected="true" disabled>Seleccione el tipo</option>
                                     <option value="Perro" {{ old('tipo_masc') == 1 ? 'selected' : '' }}>Perro</option>
                                     <option value="Gato" {{ old('tipo_masc') == 2 ? 'selected' : '' }}>Gato</option>
                                 </select>
                                 @if ($errors->has('tipo_masc'))<span class="error text-danger" for="input-tipo_masc">{{ $errors->first('tipo_masc') }}</span>
                      @endif
                    </div>
                </div>


                  {{-- descripcion--}}

                  <div class="row container">
                    <div class="col">
                      <div class="input-group input-group-outline my-2">
                        <label for="descripcion_masc" class="col-sm-3 col-form-label">Descripción mascota</label>
                            <input class="col-sm-9" name="descripcion_masc" placeholder="Ejm: Es un perro jugueton, amoroso...." rows="3" value="{{ old('descripcion_masc') }}">
              @if ($errors->has('descripcion_masc'))<span class="error text-danger" for="input-descripcion_masc">{{ $errors->first('descripcion_masc') }}</span>
            @endif
            </div>
        </div>
    </div>


        

        
    <div class="accc">
      {{-- Foto--}}
      <div class="">
         <label for="foto_masc1" class="col-sm-6 col-form-label">Imagen 1</label>
          <span class="btn btn-raised btn-round btn-info btn-file ">
             <input accept="image/*" type="file" name="foto_masc1" value="{{ old('foto_masc1') }}" onchange="vistaPrevia(event)">
          </span>
             @if ($errors->has('foto_masc1'))<span class="error text-danger" for="input-foto_masc1">{{ $errors->first('foto_masc1') }}</span>
           @endif

         <div class="imagen  contenedor_foto1">
             <label for="" >Vista previa fotografia</label><br>
             <img class="FotoF" src="" id="img-foto1" alt="">
         </div>
       </div>

       {{-- Foto2--}}
      <div class="">
         <label for="foto_masc2" class="col-sm-6 col-form-label">Imagen 2</label>
       
          <span class="btn btn-raised btn-round btn-info btn-file">
             <input accept="image/*" type="file" name="foto_masc2" value="{{ old('foto_masc2') }}" onchange="vistaPrevia2(event)">
          </span>
             @if ($errors->has('foto_masc2'))<span class="error text-danger" for="input-foto_masc2">{{ $errors->first('foto_masc2') }}</span>
           @endif

         <div class="imagen  contenedor_foto1">
             <label for="">Vista previa fotografia</label><br>
             <img class="FotoF" src="" id="img-foto2" alt="">
         </div>
       </div>

       {{-- Foto3--}}
      <div class="">
         <label for="foto_masc3" class="col-sm-6 col-form-label">Imagen 3</label>
       
          <span class="btn btn-raised btn-round btn-info btn-file">
             <input accept="image/*" type="file" name="foto_masc3" value="{{ old('foto_masc3') }}" onchange="vistaPrevia3(event)">
          </span>
             @if ($errors->has('foto_masc3'))<span class="error text-danger" for="input-foto_masc3">{{ $errors->first('foto_masc3') }}</span>
           @endif
         <div class="imagen  contenedor_foto1">
             <label for="">Vista previa fotografia</label><br>
             <img class="FotoF" src="" id="img-foto3" alt="">
         </div>
       </div>

       {{-- Foto4--}}
      <div class="">
         <label for="foto_masc4" class="col-sm-6 col-form-label">Imagen 4</label>
   
          <span class="btn btn-raised btn-round btn-info btn-file">
             <input accept="image/*" type="file" name="foto_masc4" value="{{ old('foto_masc4') }}" onchange="vistaPrevia4(event)">
          </span>
             @if ($errors->has('foto_masc4'))<span class="error text-danger" for="input-foto_masc4">{{ $errors->first('foto_masc4') }}</span>
          @endif

      
         <div class="imagen  contenedor_foto1">
             <label for="">Vista previa fotografia</label><br>
             <img class="FotoF" src="" id="img-foto4" alt="">
         </div>
       </div>

</div>

        


          <input type="hidden" name="id_user" value="{{$user->id}}">

             <!--footer-->
             <div class= "btnguardar" >
             <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <div>
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

            let id_img = document.getElementById('img-foto1');

                leerImg.onload = () => {
                    if (leerImg.readyState == 2) {
                        id_img.src = leerImg.result;
                    }
                }
                leerImg.readAsDataURL(event.target.files[0])
            }

            let vistaPrevia2 = () => {
            let leerImg = new FileReader();

            let id_img = document.getElementById('img-foto2');

                leerImg.onload = () => {
                    if (leerImg.readyState == 2) {
                        id_img.src = leerImg.result;
                    }
                }
                leerImg.readAsDataURL(event.target.files[0])
            }

            let vistaPrevia3 = () => {
            let leerImg = new FileReader();

            let id_img = document.getElementById('img-foto3');

                leerImg.onload = () => {
                    if (leerImg.readyState == 2) {
                        id_img.src = leerImg.result;
                    }
                }
                leerImg.readAsDataURL(event.target.files[0])
            }
            let vistaPrevia4 = () => {
            let leerImg = new FileReader();

            let id_img = document.getElementById('img-foto4');

                leerImg.onload = () => {
                    if (leerImg.readyState == 2) {
                        id_img.src = leerImg.result;
                    }
                }
                leerImg.readAsDataURL(event.target.files[0])
            }
</script>

@endsection
