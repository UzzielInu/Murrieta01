<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Murrieta</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('css/agency.min.css')}}" rel="stylesheet">
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:#989898;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger py-1" href="#page-top">
          <img src="{{ asset('img/portada/murrieta.png') }}" width="110" height="40" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Tienda</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Equipo</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="#"><i class="fab fa-twitter fa-lg"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fab fa-instagram fa-lg"></i></a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="https://www.facebook.com/CamisasMurrieta/" target="_blank"><i class="fab fa-facebook-square fa-lg"></i></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead" style="margin-top:5%;">
      <div class="container-fluid pt-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner" role="listbox" style="height:50%">
            <div class="carousel-item active">
              <img class="" src="{{ asset('img/portada/logo.jpg') }}" alt="First slide" style="max-width:100%;">
            </div>
            <div class="carousel-item">
              <img class="" src="{{ asset('img/portada/3.jpg') }}" alt="Second slide" style="max-width:100%;">
            </div>
            <div class="carousel-item">
              <img class="" src="{{ asset('img/portada/5.jpg') }}" alt="Third slide" style="max-width:100%;">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Servicios</h2>
            <h3 class="section-subheading text-muted">Manufactura y venta de camisas de temporada.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fab fa-paypal fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Comercio Digital</h4>
            <p class="text-muted">Puedes realizar tus compras desde internet.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-search-dollar fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Calidad</h4>
            <p class="text-muted">Contamos con controles estrictos de calidad.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-globe-americas fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Nacionales</h4>
            <p class="text-muted">Empresa Mexicana dedicada a manufactura de camisas.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Tienda</h2>
            <h3 class="section-subheading text-muted">Categorías de nuestros productos.</h3>
          </div>
        </div>
        <div class="row">
          {{-- <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus-circle fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Corta/MC4.jpg') }}" alt="Camisa Blanca">
            </a>
            <div class="portfolio-caption">
              <h4><a href="{{url('/3')}}">Camisa Blanca</a></h4>
              <p class="text-muted">Manga Corta</p>
            </div>
          </div> --}}
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus-circle fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Larga/ML5.jpg') }}" alt="Camisa Blanca">
            </a>
            <div class="portfolio-caption">
              <h4><a href="{{url('/shop/camisa_blanca')}}">Camisa Blanca</a></h4>
              {{-- <p class="text-muted">Manga Larga</p> --}}
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus-circle fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('img/tienda/Casual/Casual_Basica/Colores/cb6.jpg') }}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><a href="{{url('/shop/camisa_casual')}}">Casual</a></h4>
              {{-- <p class="text-muted">Básica</p> --}}
            </div>
          </div>
          {{-- <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus-circle fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('img/tienda/Casual/Doble_Boton/Colores/db3.jpg') }}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><a href="{{url('/6')}}">Casual</a></h4>
              <p class="text-muted">Doble Botón</p>
            </div>
          </div> --}}
          {{-- <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus-circle fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc1.jpg') }}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><a href="{{url('/7')}}">Casual</a></h4>
              <p class="text-muted">Fraccionado</p>
            </div>
          </div> --}}
          {{-- <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus-circle fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('img/tienda/Vaquera/Mezclilla/4.jpg') }}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><a href="{{url('/8')}}">Vaquera</a></h4>
              <p class="text-muted">Mezclilla</p>
            </div>
          </div> --}}
        </div>
      </div>
    </section>

    <!-- About -->
    {{-- <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Acerca de</h2>
            <h3 class="section-subheading text-muted">Nuestra Empresa</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Inicios de Camisas Murrieta</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">blah blah blah blah!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Marzo 2011</h4>
                    <h4 class="subheading">Todo fue marchando bien</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">blah blah blah blah!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Diciembre 2012</h4>
                    <h4 class="subheading">Cambiamos de giro en la empresa</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">blah blah blah blah!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Julio 2014</h4>
                    <h4 class="subheading">Empezamos a expandirnos</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">blah blah blah blah!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Se parte
                    <br>de nuestra
                    <br>Historia!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- Team -->
    {{-- <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">El gran equipo</h2>
            <h3 class="section-subheading text-muted">blah blah blah blah!.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Kay Murrieta</h4>
              <p class="text-muted">Lead Designer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
              <h4>Larry Murrieta</h4>
              <p class="text-muted">Lead Marketer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
              <h4>Diana Murrieta</h4>
              <p class="text-muted">Lead Developer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
             <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p> --}}
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contáctanos</h2>
            <h3 class="section-subheading text-muted">Camisas Murrieta.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nombre" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Correo Electrónico" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Teléfono" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensaje</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Camisas Murrieta</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              {{-- <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li> --}}
              <li class="list-inline-item">
                <a href="https://www.facebook.com/CamisasMurrieta/" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              {{-- <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li> --}}
            </ul>
          </div>
          <div class="col-md-4">
            {{-- <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul> --}}
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">camisa Blanca</h2>
                  <img class="img-fluid d-block mx-auto" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Larga/ML5.jpg') }}" alt="">
                  <p>Camisa hecha en popelina. Con un delantero y un cuello mas firme el cual facilita el ajuste al usar corbata. Disponible en tallas de niño o caballero.</p>
                  <ul class="list-inline">
                    <li>
                      <a href="{{url('/shop/camisa_blanca')}}" role="button" class="btn btn-dark">Ver más</a>
                    </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Camisa Casual</h2>
                  <img class="img-fluid d-block mx-auto" src="{{ asset('img/tienda/Casual/Casual_Basica/Colores/cb6.jpg') }}" alt="">
                  <p>Camisa de caballero casual, combinada en la parte interna del cuello y la aletilla de delantero. donde tambien se encuentra un vivo para hacerla notar  que consta de 3 colores, tambien trae combinación en la aletilla de la manga por la parte externa.</p>
                  <ul class="list-inline">
                    <li>
                      <a href="{{url('/5')}}" role="button" class="btn btn-dark">Ver más</a>
                    </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">camisa Blanca</h2>
                  <p class="item-intro text-muted">Manga Larga</p>
                  <img class="img-fluid d-block mx-auto" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Larga/ML5.jpg') }}" alt="">
                  <p>Camisa Hecha en Popelina, blanca manga Larga. Con un delantero y un cuello mas firme el cual facilita el ajuste al usar corbata y un puño con entretela para mayor firmeza. Disponible en tallas de niño o caballero.</p>
                  <ul class="list-inline">
                    <li>
                      <a href="{{url('/4')}}" role="button" class="btn btn-dark">Ver más</a>
                    </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">camisa Blanca</h2>
                  <p class="item-intro text-muted">Manga Larga</p>
                  <img class="img-fluid d-block mx-auto" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Larga/ML5.jpg') }}" alt="">
                  <p>Camisa Hecha en Popelina, blanca manga Larga. Con un delantero y un cuello mas firme el cual facilita el ajuste al usar corbata y un puño con entretela para mayor firmeza. Disponible en tallas de niño o caballero.</p>
                  <ul class="list-inline">
                    <li>
                      <a href="{{url('/4')}}" role="button" class="btn btn-dark">Ver más</a>
                    </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">camisa Blanca</h2>
                  <p class="item-intro text-muted">Manga Larga</p>
                  <img class="img-fluid d-block mx-auto" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Larga/ML5.jpg') }}" alt="">
                  <p>Camisa Hecha en Popelina, blanca manga Larga. Con un delantero y un cuello mas firme el cual facilita el ajuste al usar corbata y un puño con entretela para mayor firmeza. Disponible en tallas de niño o caballero.</p>
                  <ul class="list-inline">
                    <li>
                      <a href="{{url('/4')}}" role="button" class="btn btn-dark">Ver más</a>
                    </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/agency.min.js')}}"></script>

  </body>

</html>
