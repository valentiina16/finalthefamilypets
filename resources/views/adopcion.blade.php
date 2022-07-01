<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="icon" type="image/png" href="{{ asset('img/Logotipo.png') }}">

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
        <!-- Styles -->
        <link href="css/stylepaguser.css" rel="stylesheet">
         <!-- Customized Bootstrap Stylesheet -->
     

    </head>
    <body class="antialiased">

        <div class="sticky-container">
            <ul class="sticky">
                <li>
                    <img src="/img/facebook.png" width="32" height="32">
                    <p><a href="https://web.facebook.com/The-Family-Pets-114222827948723" target="_blank">Pagina<br>Facebook</a></p>
                </li>
                <li>
                    <img src="img/instagram.png" width="32" height="32">
                    <p><a href="https://www.instagram.com/thefamilypetspopayan/" target="_blank">Perfil<br>Instagram</a></p>
                </li>
                <li>
                    <img src="img/whatsapp.png" width="32" height="32">
                    <p><a href="https://api.whatsapp.com/send/?phone=573245643803&text&app_absent=0" target="_blank">Chat<br>Whatsapp</a></p>
                </li>
            </ul>
        </div>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status">
            </div>
            <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
        </div>
        <!-- Spinner End -->


        <!-- Brand & Contact Start -->
 <!-- Brand & Contact Start -->


 
  <!-- Brand & Contact Start -->



 <div class="menu3">
    <nav class="barra4 container-fluid wow fadeIn navbar navbar-expand-lg navbar-transparent " style="display: block">
          <div class="row align-items-center top-bar">

        <div class="collapse navbar-collapse justify-content-end navbar-absolute fixed-top">
          @if (Route::has('login'))
          <div class="hidden top-10  px-5 py-1 sm:block" >
              @auth()
              <ul class="navbar-nav">

                  <li class="nav-item dropdown " >
                    <a class="nav-link" href="#"  id="navbarDropdownProfile" aria-haspopup="true" aria-expanded="false">
                          <img src="/img/usuario.png" width="60px" height="36px" class="perfil">
                       <p class="d-lg-none d-md-block">
                        {{ __('Account') }}
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                      <a class="titulos"  href="{{route('perfil.show')}}">{{ __('Perfil') }}</a>

                      <div class="dropdown-divider"></div>
                      <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Cerrar sesión</a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  @else
              <a style="margin: 15px" style="text-align: end" target="_blank" href="{{ route('login') }}" >Iniciar sesión</a>

              @if (Route::has('register'))
                  <a target="_blank" href="{{ route('register')}}">Registrase</a>
              @endif
          @endauth
          </div>
      @endif

                  </li>
                </ul>
          </div>

      </div>

    </nav>
    <!-- Navbar Start -->
    <nav class="barra5 navbar navbar-expand-lg bg-primary navbar-dark  py-lg-0 px-lg-2 wow fadeIn">
        <div>
            <img src="/img/logotipo.png" class="logo2 d-block" alt="">

        </div>
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav  p-20 p-lg-0">

                    <a href="{{ url('/') }}" class="nav-item nav-link">Inicio</a>

                    <a href="{{ url('/adopcion') }}" class="nav-item nav-link active">Adoptar</a>
                    <a href="#" class="nav-item nav-link">Donacion</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Entidades</a>
                        <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0" style="background-color:#009CFF;">
                            <a href="{{ url('/fundacion') }}" class="dropdown-item">Fundaciones</a>
                            <a href="team.html" class="dropdown-item">Veterinarias</a>

                        </div>
                    </div>
                    <a href="{{ url('/ayuda') }}" class="nav-item nav-link ">Ayuda</a>
                </div>

            </div>
        </div>
    </nav>
</div>
    <!-- Navbar End -->


   
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div style="margin-top:100px" class="container-fluid page-header py-5 mb-5 wow fadeIn">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3" >Adoptar</h1>

    </div>
</div>


    <!-- Page Header End -->
    <div style="margin-left: 18px; width: 250px;  text-align: center">
        <form class="navbar-form">
            <div>
                <select name="tipo_masc" id="typeFilter" >
                    <option selected="true" disabled>Seleccione un Tipo</option>
                    <option>Gato</option>
                    <option>Perro</option>
                </select>
            </div>
            <div>
        <button type="submit" class="btn btn-danger">
              Buscar
              <div class="ripple-container"></div>
            </button>
        </div>
          </form>
    </div>

  
   

              
                <div class="" style="margin-top: 15px; margin-left:5%">
                    <div class="tarjeta">
            
                    @forelse($pet as $pet)
                            <div class="tarjeta1">
                                
                        <div class="titulo">
                            {{$pet->nombre_masc}}
                        </div>
                        <div  style="margin-top: 2% ">
                            <img class="img_adopt zoom" src="{{asset('img/fotos/'.$pet->foto_masc1)}}">
                            <section class="contenedor">
                            <img class="img_adopt1 zoom"  src="{{asset('img/fotos/'.$pet->foto_masc2)}}">
                               <img class="img_adopt2 zoom"  src="{{asset('img/fotos/'.$pet->foto_masc3)}}">
                               <img class="img_adopt2 zoom"  src="{{asset('img/fotos/'.$pet->foto_masc4)}}">
                               </section>
                           <p class="card-text1" style="margin-top: 5%"><b style="color: #000"> Edad:</b> {{$pet->edad_masc}}</p>
                            <p class="card-text1"><b style="color: #000"> Raza:</b> {{$pet->raza_masc}}</p>
                            <p class="card-text1"><b style="color: #000">Tamaño:</b> {{$pet->tamaño_masc}}</p>
                            <p class="card-text1"><b style="color: #000">Sexo:</b> {{$pet->sexo_masc}}</p>
                            <p class="card-text1"><b style="color: #000">Tipo:</b> {{$pet->tipo_masc}}</p>
                            <p class="card-text1"><b style="color: #000">Descripción: </b>{{$pet->descripcion_masc}}</p>

                            <p class="card-text1"><b style="color: #000"> Fundación:</b> {{$pet->users->nombre_usuario}}<b><img src="/img/mapa.png" style="width: 7%; margin-left:5%"  alt=""></b> {{$pet->users->direccion_usuario}}</p>
            
                            @if (Route::has('login'))
                                @auth
                               {{--<div class="pie sub-div button-primary ">
                                    <a href="{{route('getPet', $pet)}}">Pre-adoptar</a>
                                </div>--}} 
                                <div class="page">
                                    <a href="#openModal" class="boton">Agendar cita</a>
        
                                    <div id="openModal" class="modalDialog">
                                        <div>
                                            <a href="#close" title="Close" class="close">X</a>
                                            <h2></h2>
                                            <p></p>
                                            <form method="POST" action="{{ route('adopcion.store') }}" class="form-horizontal" >
                                                @csrf
        
                                            <div class="card mt-10">
                                                <!--Header-->
                                                <div class="card-header card-header-primary">
                                                  <h4 class="card-title">Reserva tu cita</h4>
                                                  <img src="/img/calendario.png" width="100px" height="80px">
                                                </div>
                                                <!--End header-->
                                                <!--Body-->
                                                <div class="card-bodyinic">
                                                  <div class="row">
                                                  <label for="">Fechas y horarios disponibles:</label>
                                                  {{-- <select name="fecha_solic" class="form-control">
                                                        <option selected="true" disabled="disabled">Seleccione una fecha</option>
                                                        @foreach ($calendarios as $calendario)
                                                    <option value="{{$calendario->start}}">{{$calendario->start}}</option>
                                                        @endforeach
                                                    </select>--}}
        
                                             
                                              
                                                      <div class="card2">
                                                        @foreach ($calendarios as $calendario)
                                                        <div class="card-body2 col-md-8" style="margin-left: 10px">
                                                    <h6 class="fecha"  value="{{$calendario->start}}" value="{{$calendario->hora_inicio}}">Fecha inicial {{$calendario->start}} Hora inicial  {{$calendario->hora_inicio}}</h6>
                                                    <h6 class="fecha"  value="{{$calendario->end}}" value="{{$calendario->hora_final}}">Fecha final {{$calendario->end}} Hora final  {{$calendario->hora_final}}</h6>
                                                   
                                                    <input type="hidden" name="id_pet" value="{{$pet->id}}">
                                                    <input type="hidden" name="id_calendar" value="{{$calendario->id}}">
                                                    <input type="hidden" name="fecha_solic_final" value="{{$calendario->end}}">
                                                    <input type="hidden" name="hora_solic_inic" value="{{$calendario->hora_inicio}}">
                                                    <input type="hidden" name="hora_solic_final" value="{{$calendario->hora_final}}">
                                                   
                                                    <div class="guardar">
                                                        <a href="">
                                                            
                                                            <button type="hidden" class="btn btn-primary2" name="fecha_solic_inic" value="{{$calendario->start}}">Agendar</button>
                                                        </a>
                                                  </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                              
        
                                                      
                                                      </div>
                                                    </div>
                                                  </div>
                                               </form>
                                                </div>
                                              </div>
                                        </div>

                               @else
                            <div  class="pie sub-div button-primary"  onclick="Swal.fire({ 
                                title: 'Hola Amiguito!! Debes iniciar sesion primero',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: ' #d33',
                                confirmButtonText:  'INICIAR SESION' 
                                
                              }).then((result) => {
                                if (result.isConfirmed) {
                                  window.location.href='login';
                                  
                                }
                              });">
                              <a href="#" class="boton">Agendar cita</a></div>
                              
                            @endif
                            @endauth
            
            
                        </div>
                    </div>
            
                           
                            @empty
                                
                            
                                    <div class="container text-center py-5">
                                    <nav aria-label="breadcrumb animated slideInDown" style="width: 400px; margin:auto;">
                                        <div style="width: 400px; border-color: black" class="alert alert-light" role="alert">
                                            <strong>¡Sin registros!</strong>
                                            <p>Aún no hay mascotas disponibles para adoptar.</p>
                                        </div>
                                    </nav>
                                
                            </div>
                    @endforelse
                            
                        
                
                
                            
                
                    </div>
                </div>


                {{--@empty
                    <div class="container text-center py-5">
                    <nav aria-label="breadcrumb animated slideInDown" style="width: 400px; margin:auto;">
                        <div style="width: 400px; border-color: black" class="alert alert-light" role="alert">
                            <strong>¡Sin registros!</strong>
                            <p>Aún no hay mascotas disponibles para adoptar.</p>
                          <div>
                    </div>
                    </nav>--}}

    <!-- Service Start -->

    <!-- Service End -->


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- Footer Start -->




<div class="final">
  <p>
      2021 ® Todos los derechos reservados, The family pets .
<a href="1&z=6&output=embedhttps://www.adoptanocompres.org/wp-content/uploads/2020/05/POLITICAS-PARA-EL-TRATAMIENTO-DE-DATOS-PERSONALES-PAGINA-WEB-ADOPTA-NO-COMPRES.pdf">Política de Protección de Datos</a>
</div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="{{ url('/adopcion') }}" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top "><i
        class="bi bi-arrow-up "></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js "></script>
    <script src="lib/wow/wow.min.js "></script>
    <script src="lib/easing/easing.min.js "></script>
    <script src="lib/waypoints/waypoints.min.js "></script>
    <script src="lib/counterup/counterup.min.js "></script>
    <script src="lib/owlcarousel/owl.carousel.min.js "></script>
    <script src="lib/lightbox/js/lightbox.min.js "></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Template Javascript -->
    <script src="js/main.js "></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.zoom').hover(function() {
                $(this).addClass('transition');
            }, function() {
                $(this).removeClass('transition');
            });
        });
        </script>
</body>

</html>
