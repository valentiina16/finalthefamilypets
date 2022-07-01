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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
                    <img src="/img/instagram (1).png" width="32" height="32">
                    <p><a href="https://www.instagram.com/thefamilypetspopayan/" target="_blank">Perfil<br>Instagram</a></p>
                </li>
                <li>
                    <img src="/img/whatsapp (1).png" width="32" height="32">
                    <p><a href="https://plus.google.com/programacionnet" target="_blank">Chat<br>Whatsapp</a></p>
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
  <div class="container-fluid py-4 px-5 wow fadeIn" style="height: 70px">
    <div class="row align-items-center top-bar">
        <div>
            @if (Route::has('login'))
            <div class="hidden sticky-top top-0 right-0 px-6 py-4 sm:block" style="text-align: end">
                @auth
                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Cerrar sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <a href="{{ route('login') }}" >Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        </div>

    </div>
</div>

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

                    <a href="{{ url('/interfazprincipal') }}" class="nav-item nav-link">Inicio</a>

                    <a href="{{ url('/adopcion') }}" class="nav-item nav-link active">Adoptar</a>
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
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Mascota </h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>

    </div>
    <!-- Page Header End -->

    <div class="col-lg-2"></div>

    <div class="row g-0" style="margin-top: 10%;">
        <div class="col-lg-2">
        </div>
        <div class="cardd2 col-lg-8" style="border-color: rgb(255, 0, 0);">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <img src="{{asset('img/fotos/'.$pets->foto_masc)}}" class="img-fluid rounded-start" alt="...">
                    <div class="row"><br><br>
                        <div class="col"><img src="{{asset('img/fotos/'.$pets->foto_masc)}}" class="img-fluid rounded-start" alt="..."></div>
                        <div class="col"><img src="{{asset('img/fotos/'.$pets->foto_masc)}}" class="img-fluid rounded-start" alt="..."></div>
                        <div class="col"><img src="{{asset('img/fotos/'.$pets->foto_masc)}}" class="img-fluid rounded-start" alt="..."></div>
                    </div>
                    </div>
                        <div class="col-md-8 col-sm-9">
                            <div class="card-body">
                                <h1 class="card-title">NOMBRE DE LA MASCOTA: {{$pets->nombre_masc}}</h5>
                                    <div style="margin-top: 10%;  margin-left:30%;">
                                    <h3><p class="card-text" style="margin-top: 10%;">EDAD: {{$pets->edad_masc}}</p></h3>
                                    <h3> <p class="card-text">RAZA:  {{$pets->raza_masc}}</p> <h3>
                                        <h3> <p class="card-text">TAMAÑO: {{$pets->tamaño_masc}}</p> <h3>
                                            <h3> <p class="card-text">SEXO: {{$pets->sexo_masc}}</p> <h3>
                                                <h3> <p class="card-text">TIPO: {{$pets->tipo_masc}}</p> <h3>
                                </div>


                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end text-right" style=" margin-top: 50px; margin-right: 100px;">
                            </div>


                </div>
                <div class="card-body">
                    <h3><p class="card-text">DESCRIPCION: {{$pets->descripcion_masc}} </p> <h3>

                    <button  class=" btn btn-primary me-md-2 "  style="margin-left: 30%; background-color: orange;" type="button ">FORMULARIO DE PRE-ADOPCION</button> </div>
                </div>
            </div>

        </div>

        <div class="col-lg-2"></div>

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-body footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 5%;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Informacion</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Sena norte, Popayán-Cauca</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+573127844521</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>thefamilypetscompany@gmail.com</p>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="index.html">TheFamilyPets</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="index.html">TheFamilyPetsCompany</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="{{ url('/adopcion') }}" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
