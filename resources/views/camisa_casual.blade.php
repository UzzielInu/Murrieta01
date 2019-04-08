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
          <img src="{{ asset('img/portada/murrieta.png') }}" width="110" height="40" class="d-inline-block align-top" alt="">
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
          <h1 class="my-4">Camisa Casual</h1>
          <div class="list-group">
            <p align="justify" style="font-size:16px;">Camisa de caballero manga larga, combinada en la parte interna del cuello, aletilla y puño para darle una mejor vista a la prenda.</p>

          </div>
          {{-- <div class="list-group">
            <a href="{{url('shop/camisa_blanca/corta')}}" class="list-group-item">Manga Corta</a>
            <a href="{{url('shop/camisa_blanca/larga')}}" class="list-group-item">Manga Larga</a>
          </div> --}}
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9 mt-4">
          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div id="images" class="card h-100">
                <a href="#">
                <img class="card-img-top" src="{{ asset('img/tienda/Casual/Casual_Basica/Caracteristicas/cb7.jpg') }}" alt=""></a>
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Casual_Basica/Caracteristicas/cb6.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Casual_Basica/Caracteristicas/cb5.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Casual_Basica/Caracteristicas/cb4.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Casual_Basica/Caracteristicas/cb3.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Casual_Basica/Caracteristicas/cb2.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Casual_Basica/Caracteristicas/cb1.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Casual_Basica/Colores/cb1.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Casual_Basica/Colores/cb2.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Casual_Basica/Colores/cb3.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Casual_Basica/Colores/cb4.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Casual_Basica/Colores/cb5.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Casual_Basica/Colores/cb6.jpg') }}" alt="" style="display:none">
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Casual Básica</a>
                  </h4>
                  <p class="card-text"> Camisa de caballero casual, combinada en la parte interna del cuello y la aletilla de delantero, donde se encuentra un vivo para hacerla notar que consta de 3 colores. <br> Tiene tambien combinación en la aletilla de la manga por la parte externa. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div id="images2" class="card h-100">
                <a href="#">
                <img class="card-img-top" src="{{ asset('img/tienda/Casual/Doble_Boton/Colores/db6.jpg') }}" alt=""></a>
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Doble_Boton/Caracteristicas/db5.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Doble_Boton/Caracteristicas/db6.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Doble_Boton/Caracteristicas/db1.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Doble_Boton/Caracteristicas/db2.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Doble_Boton/Caracteristicas/db3.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Doble_Boton/Colores/db1.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Doble_Boton/Colores/db2.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Doble_Boton/Colores/db3.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Doble_Boton/Colores/db4.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Doble_Boton/Colores/db5.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Doble_Boton/Caracteristicas/db4.jpg') }}" alt="" style="display:none">
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Doble Botón</a>
                  </h4>
                  <p class="card-text"> Camisa de caballero manga larga en corte Slim, combinada en la parte interna del cuello, aletilla y puño para darle una mejor vista a la prenda. <br> Tambien trae botones en el delantero agrupados de dos en dos. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div id="images3" class="card h-100">
                <a href="#">
                <img class="card-img-top" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc11.jpg') }}" alt=""></a>
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf1.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf2.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf3.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf4.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf6.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf7.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf8.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf9.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf10.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf11.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf12.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf13.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf14.jpg') }}" alt="" style="display:none">

                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc1.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc2.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc3.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc4.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc5.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc6.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc7.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc8.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc9.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc10.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Caracteristicas/cf5.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc12.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc13.jpg') }}" alt="" style="display:none">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/tienda/Casual/Fraccionado/Colores/fc14.jpg') }}" alt="" style="display:none">

                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Fraccionado</a>
                  </h4>
                  <p class="card-text"> Camisa de caballero en corte slim, tallas, chica mediana, grande y extra grande. <br> Tiene combinación en la parte interna del cuello, la parte interna del delantero y el puño. <br> Tambien cuenta con boton de cuello </p>
                </div>
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
    const gallery3 = new Viewer(document.getElementById('images3'));
    </script>
  </body>

</html>
