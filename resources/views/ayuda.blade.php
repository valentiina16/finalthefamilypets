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

                    <a href="{{ url('/adopcion') }}" class="nav-item nav-link ">Adoptar</a>
                    <a href="#" class="nav-item nav-link">Donacion</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Entidades</a>
                        <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0" style="background-color:#009CFF;">
                            <a href="{{ url('/fundacion') }}" class="dropdown-item">Fundaciones</a>
                            <a href="team.html" class="dropdown-item">Veterinarias</a>

                        </div>
                    </div>
                    <a href="{{ url('/ayuda') }}" class="nav-item nav-link active">Ayuda</a>
                </div>

            </div>
        </div>
    </nav>
</div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <h1 style="text-align: center; margin-top:100px" class="faq-heading">¿Cómo podemos ayudarte?</h1>
        <section class="faq-container">
            <div class="faq-one">
                <!-- faq question -->
                <h1 class="faq-page">¿Cómo adoptar?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>En nuestra página se podrá realizar este proceso ingresando al apartado de adopción que esta en nuestro menú principal donde podrás visualizar todas las mascotas.</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <!-- faq question -->
                <h1 class="faq-page">¿Pasos para adoptar?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>1. Deberás estar registrado en nuestra página </p>

                      <p>2. Escoger una mascota en nuestro apartado de adopción</p>

                      <p> 3. Reserva la fecha de la cita disponible por la fundación </p>

                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
                <h1 class="faq-page">Tienes problemas con nuestra página?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>En el apartado de inicio encontraras formulario para contactarnos</p>
                </div>
            </div>
        </section>




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
    <script src="js/ayuda.js "></script>
</body>

</html>
