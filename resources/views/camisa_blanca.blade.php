<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tienda</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.3.0/viewer.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.3.0/viewer.min.js"></script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#989898;">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{ asset('img/portada/murrieta.png') }}" width="90" height="40" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div> --}}
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">Camisa Blanca</h1>
          <div class="list-group">
            <p align="justify" style="font-size:16px;">Camisa de caballero casual, combinada en la parte interna del cuello y la aletilla de delantero. donde tambien se encuentra un vivo para hacerla notar  que consta de 3 colores, tambien trae combinación en la aletilla de la manga por la parte externa.</p>
          </div>
          {{-- <div class="list-group">
            <a href="{{url('shop/camisa_blanca/corta')}}" class="list-group-item">Manga Corta</a>
            <a href="{{url('shop/camisa_blanca/larga')}}" class="list-group-item">Manga Larga</a>
          </div> --}}
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9 mt-4">

          {{-- <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Corta/MC5.jpg') }}"  height="50%" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Corta/MC4.jpg') }}" height="50%" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Corta/MC3.jpg') }}" height="50%" alt="Third slide">
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
          </div> --}}

          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
              <div id="images" class="card h-100">
                <a href="#">
                <img class="card-img-top" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Corta/MC4.jpg') }}" alt=""></a>
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Corta/MC5.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Corta/MC1b.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Corta/MC2.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Corta/MC3.jpg') }}" alt="" style="display:none">
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Manga Corta</a>
                  </h4>
                  {{-- <h5>$</h5> --}}
                  <p class="card-text"> Camisa Hecha en Popelina, disponible en tallas de niño o caballero. </p>
                </div>
                {{-- <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">

              <div id="images2" class="card h-100">
                <a href="#">
                <img class="card-img-top" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Larga/ML5.jpg') }}" alt=""></a>
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Larga/ML4.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Larga/ML3.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Larga/ML2.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Larga/ML1.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa_Blanca/Manga_Larga/ML0.jpg') }}" alt="" style="display:none">
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Manga Larga</a>
                  </h4>
                  {{-- <h5>$</h5> --}}
                  <p class="card-text"> Camisa Hecha en Popelina, disponible en tallas de niño o caballero. </p>
                </div>
                {{-- <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div> --}}
              </div>
            </div>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Camisas Murrieta</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript">
    const gallery = new Viewer(document.getElementById('images'));
    const gallery2 = new Viewer(document.getElementById('images2'));
    </script>
  </body>

</html>
