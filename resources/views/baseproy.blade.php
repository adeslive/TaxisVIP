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

  <title>Taxis VIP</title>
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ route('panel') }}">TaxiVIP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
      aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-primary">Choferes</button>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"></button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                <a class="dropdown-item" href="{{route('choferes')}}">Lista choferes</a>
                <a class="dropdown-item" href="{{route('activos')}}">Activos</a>
                <a class="dropdown-item" href="{{route('inactivos')}}">Inactivos</a>
                <a class="dropdown-item" href="{{route('encarrera')}}">En carrera</a>
              </div>
            </div>
          </div>
        </li>
        
        <li class="nav-item">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-primary">Zonas</button>
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                            <a class="dropdown-item" href="{{route('listaZonas')}}">Lista Zonas</a>
                            <a class="dropdown-item" href="{{route('agregarZona')}}">Agregar Zonas</a>
                        </div>
                </div>
            </div>
        </li>
        
        @if (Auth::user()->access_level == 1)
          <li class="nav-item">
            <a class="nav-link" href="{{route('crearChofer')}}">Agregar Empleados</a>
          </li>
        @endif        
        
      </ul>
      <form action="{{ route('logout') }}" method="POST" class="form-inline my-2 my-lg-0">
        @csrf
        <button class="btn btn-secondary my-2 my-sm-2" type="submit">Cerrar sesion</button>
      </form>
    </div>
  </nav>
</header>

<body>
  <div class="container-fluid mt-2">
    @yield('info')
  </div>

  </div>
  <div class="container-fluid">
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
  @yield('scripts')
</body>

</html>
