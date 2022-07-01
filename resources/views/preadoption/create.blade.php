<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
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
                    <p><a href="https://plus.google.com/programacionnet" target="_blank">Chat<br>Whatsapp</a></p>
                </li>
            </ul>
        </div>

        <!-- Spinner Start -->
        
        <!-- Spinner End -->


        <!-- Brand & Contact Start -->
 <!-- Brand & Contact Start -->
 <nav class="container-fluid py-4 px-5 wow fadeIn navbar navbar-expand-lg navbar-transparent " style="height: 70px">
    <div class="row align-items-center top-bar">

  <div class="collapse navbar-collapse justify-content-end navbar-absolute fixed-top">
    @if (Route::has('login'))
    <div class="hidden sticky-top top-10  px-5 py-1 sm:block" style="text-align: end" >
        @auth()
        <ul class="navbar-nav">
      
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="/img/usuario.png" width="60px" height="36px">
                 <p class="d-lg-none d-md-block">
                  {{ __('Account') }}
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownProfile">
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
  </div>
</nav>

        <div class="sticky-top">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark  py-lg-0 px-lg-2 wow fadeIn">
        <div>
            <img src="/img/Logotipo_TPF.ico" class="rounded d-block" alt="">

        </div>
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav  p-20 p-lg-0">

                    <a href="{{ url('/') }}" class="nav-item nav-link">Inicio</a>

                    <a href="#" class="nav-item nav-link active">Adoptar</a>
                    <a href="#" class="nav-item nav-link">Donacion</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Entidades</a>
                        <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0" style="background-color:#009CFF;">
                            <a href="fundaciones.html" class="dropdown-item">Fundaciones</a>
                            <a href="team.html" class="dropdown-item">Veterinarias</a>

                        </div>
                    </div>
                    <a href="ayuda.html" class="nav-item nav-link">Ayuda</a>
                </div>

            </div>
        </div>
    </nav>
</div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    


    <!-- Page Header End -->

    <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('preadoption.store') }}" class="form-horizontal">
          @csrf
          <div class="card ">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Nueva Cita</h4>
              <p class="card-category">Rellene los datos</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
              <label for="">Fecha:</label>
                <select name="fecha_solic" class="form-control">
                    <option selected="true" disabled="disabled">Seleccione una fecha</option>
                        @foreach ($calendarios as $calendario)
                    <option value="{{$calendario->start}}">{{$calendario->start}}</option>
                        @endforeach
                </select>
                </div>
                <input type="hidden" name="id_pet" value="{{$pet->id}}">
                <input type="hidden" name="id_user" value="{{$user->id}}">
                <input type="hidden" name="estado_masc" value="Proceso preadocpion">
            </div>

            <!--End body-->

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
                <a href="{{route('perfil.show')}}">
                    <button type="submit" class="btn btn-primary">Guardar</button>


                </a>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    

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

    <!-- Template Javascript -->
    <script src="js/main.js "></script>
</body>

</html>
