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

       


        <!-- Brand & Contact Start -->
  <!-- Brand & Contact Start -->


  <div class="menu3">
    <nav class="container-fluid wow fadeIn navbar navbar-expand-lg navbar-transparent barra1">
          <div class=" row align-items-center top-bar">

        <div class="collapse navbar-collapse justify-content-end navbar-absolute fixed-top">
          @if (Route::has('login'))
          <div class="hidden top-10  py-1 sm:block" >
              @auth()
              <ul class="navbar-nav">

                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#"  id="navbarDropdownProfile" aria-haspopup="true" aria-expanded="false">
                          <img src="/img/usuario.png" width="60px" height="36px" class="perfil">
                       <p class="d-lg-none d-md-block">
                        {{ __('Account') }}
                      </p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownProfile">
                      <a class=""  href="{{route('perfil.show')}}">{{ __('Perfil') }}</a>

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
</li>
                </ul>
          @endauth
          </div>

      @endif


          </div>


    </div>
    </nav>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark  py-lg-0 px-lg-2 wow fadeIn barra5"  >
        <div>
            <img src="/img/Logotipo.png" class="logo d-block" alt="">

        </div>
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav  p-20 p-lg-0">

                <a href="#" class="nav-item nav-link active ">Inicio</a>
                <a href="#somos" class="nav-item nav-link">Quienes somos</a>
                <a href="{{ url('/adopcion') }}" class="nav-item nav-link">Adoptar</a>
                <a href="donacion.html" class="nav-item nav-link">Donacion</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Entidades</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0" style="background-color:#009CFF;">
                        <a href="{{ url('/fundacion') }}" class="dropdown-item">Fundaciones</a>
                        <a href="veterinarias.html" class="dropdown-item">Veterinarias</a>

                    </div>
                </div>
                <a href="#contactanos" class="nav-item nav-link">Contactanos</a>
                <a href="{{ url('/ayuda') }}" class="nav-item nav-link">Ayuda</a>
            </div>

        </div>
    </nav>
</div>
    <!-- Navbar End -->

     <!-- Carousel Start -->
     <div class="carousel" data-wow-delay="1000" style="margin-top: 100px">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="img/perros_gatos.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="img/callejeros.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="img/img1.jpg" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/mascota.jpg" alt="Image" style="max-width: 100%; ;" >
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-0 animated zoomIn">BIENVENIDOS
                            </h1>
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Los animales no son propiedades o cosas, son organismos vivientes, sujetos a una vida que merecen nuestra compasión, amor, respeto y apoyo"</h4>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/callejeros.jpg" alt="Image" style="max-width: 100%; ">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">

                            <h1 class="display-1 text-white mb-0 animated zoomIn">ADOPTA
                            </h1>
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">¡No compres uno de raza, adopta uno sin casa!</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/img1.jpg" alt="Image" style="max-width: 100%; ">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Tantas personas en soledad y tantos de ellos buscando compañía</h4>
                        </div>
                    </div>
                </div>


                    </div>
               
           
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

                <div class="container-fluid page-header1 py-5 mb-5 wow fadeIn" id="somos" data-wow-delay="0.1s">
                    <div class="container text-center py-5">
                        <h1 class="display-4 text-white animated slideInDown mb-3">Quienes somos</h1>
                        <nav aria-label="breadcrumb animated slideInDown">

                        </nav>
                    </div>
    </div>

    <div class="row mb-50 justify-content-center">
        <div class="col-md-5 col-sm-12 text-center offset-md-1">
        <img src="/img/mascota.jpg" class="img-fluid" alt="">
            </div>
        <div class="col-md-5 col-sm-12">
            <div class="content">
                <h2> Misión </h2>
                <p>The family pets es una pagina web que se creo con el objetivo de brindarle informacion que concientice, y haga una llamado a todas las personas en elcuidado de los animales, ademas brinda la opcion de adoptar mascotas que estan abandonadas
                    y encuentren un hogar amoroso.</p>
            </div>
        </div>
    </div>

    <div class="row mt-50 justify-content-center quienes" style="margin-bottom: 5%">
        <div class="col-12 col-md-5 offset-md-1 col-md-5 col-sm-12">
        <div class="content">
                <h2> Visión </h2>
                <p> Para el 2023 esta pagina debera estar disponible a nivel nacional, que permita a las mascotas encontrar un hogar donde encontraran los cuidados y el cariño que necesitan. De igual manera disminuir la cantidad de animales que estan
                        desprotegidos y que la adopcion se la mejor opcion para las personas.</p>
            </div>
    </div>
    <div class="col-12 col-md-5 col-sm-12 text-center">
        <img src="/img/vision.jpg" class="img-fluid" alt="">
            </div>
    </div>
       
        <!-- Page Header End -->

        <div class="card" style="margin: 50px">
            <div class="card-body">
                <h1 class="section-title bg-white text-center text-primary " >APLICATIVO MÓVIL
                </h1>
                <img  src="/img/final.jpeg" alt="">
        
            
             <h5>Descarga nuestra aplicación movil que se encuentra en la play store, donde podras tener mayor acceso a los beneficios de nuestro aplicativo. Nunca dejes de ayudar a las mascotas</h5>
             <a href="#" class="link-info" style="text-align: center" >¡Descargar aqui!</a>
        
            </div>
           </div>
        <!-- Contact Start -->
        <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" id="contactanos">
            <div class="container text-center py-5">
                <h1 class="display-4 text-white animated slideInDown mb-3">Contactanos</h1>
                <nav aria-label="breadcrumb animated slideInDown">

                </nav>
            </div>
        </div>
        <div class="container-xxl py-5 " >
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="section-title bg-white text-center text-primary px-3">Contactanos</h6>
                    <h1 class="display-6 mb-4">Envianos tu mensaje</h1>
                </div>
                <div class="row g-0 justify-content-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="text-center mb-4">Envianos tu mensaje para conocer tus inquietudes o sugerencias, estamos antentos tu experiencia es lo mas importartante para nosotro para poder seguir mejorando. Gracias por visitar The family pets </p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">NOMBRE COMPLETO</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">CORREO ELECTRONICO</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">TELEFONO</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">ASUNTO</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                        <label for="message">COMENTARIO</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">ENVIAR
                                        MENSAJE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer Start -->

    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" id="contactanos">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Encuentranos</h1>
           
        </div>
    </div>
    <section>
    <div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <iframe class="w-100 mb-n2" style="height: 440px;" src="https://www.google.com/maps/d/embed?mid=1K-TmOq-NiTr1VPPTeoIG5OGleUg&msa=0&ie=UTF8&t=p&ll=2.3943219999999945%2C-76.57470699999999&spn=7.677974%2C12.08496" frameborder="0" allowfullscreen=""
            aria-hidden="false" tabindex="0"></iframe>
    </div>
  <div class="final" style="margin: 50px;">
    <p>
        2021 ® Todos los derechos reservados, The family pets .
<a href="https://web.facebook.com/The-Family-Pets-114222827948723">Política de Protección de Datos</a>
</div>
            </section>
                <!-- Footer End -->


    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


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


        </div>
    </body>
</html>
