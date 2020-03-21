<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/paginacion.css')}}">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">TaxiVIP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Principal <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Choferes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Agregar Empleados</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-secondary my-2 my-sm-2" type="submit">Cerrar sesion</button>
              </form>
            </div>
          </nav>
          <br>
          <br>
          <br>
    </div>
    <div class="container">
      @yield('info')
    </div>
    <!--<div class="container">
    <a href="{{ route('foto') }}" class="btn btn-primary">Fotos</a>
    <a href="{{ route('noticia') }}" class="btn btn-primary">Blog</a>
    <a href="{{ route('nosotros') }}" class="btn btn-primary">Nosotros</a>
    </div>-->
    <div class="container">
        @yield('seccion')
    </div>
    <!--<div class="container bg-dark text-white text-center">footer</div>-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/paginacion.js')}}"></script>
  </body>
</html>