<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galería</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/thumbnail-gallery.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.3.0/viewer.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.3.0/viewer.min.js"></script>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand py-0" href="{{url('2')}}">
          <img src="{{ asset('img/portada/logo.jpg') }}" width="90" height="40" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
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
        </div> -->
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <h1 class="my-4 text-center text-lg-left">Camisa Blanca</h1>
      <div id="images" class="row text-center text-lg-left">
        <div class="row col-md-12 justify-content-center">
          <h3>Manga Larga</h3>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa Blanca/Manga_Larga/ML3.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa Blanca/Manga_Larga/ML4.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa Blanca/Manga_Larga/ML5.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa Blanca/Manga_Larga/ML0.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa Blanca/Manga_Larga/ML1.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Camisa Blanca/Manga_Larga/ML2.jpg') }}" alt="">
          </a>
        </div>
      </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Murrieta 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
    const gallery = new Viewer(document.getElementById('images'));
    </script>
  </body>

</html>
