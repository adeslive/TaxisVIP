<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/map_styles.css')}}">

  <link rel="stylesheet" href="{{asset('css/all.css')}}">

  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">



  <title>Hello, world!</title>
</head>

<body>

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
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                  <a class="dropdown-item" href="{{route('listaZonas')}}">Lista Zonas</a>
                  <a class="dropdown-item" href="{{route('agregarZona')}}">Agregar Zonas</a>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <button type="button" class="btn btn-primary">Clientes</button>
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                  <a class="dropdown-item" href="{{route('listaClientes')}}">Lista Clientes</a>
                  <a class="dropdown-item" href="{{route('agregarCliente')}}">Agregar Cliente</a>

                </div>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('listaCarreras')}}">Carreras</a>
          </li>




          @if (Auth::user()->access_level == 1)
          <li class="nav-item">
            <a class="nav-link" href="{{route('crearChofer')}}">Agregar Chofer</a>
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
  <br><br>


  <div class="container-fluid">
    <section class="view">

      <div class="container1">
        <div id="map" class="capa1"></div>


        <div id="data" class="capa2">
          <br>
          <div class="container">
            <h4 class="text-primary text-center;"> <strong> Carrera</strong>
              <h4>
          </div>

          <hr>
          <div class="container mb-2">

            <form action="{{ route('orderCreate') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="origen">Origen:</label>
                <input type="text" class="form-control" id="origen" name="origin" placeholder="Origen" required>
              </div>
              <div class="form-group">
                <label for="destino">Destino:</label>
                <input type="text" class="form-control" id="destino" name="destination" placeholder="Destino" required>
              </div>
              <div class="form-group">
                <label for="distancia">Distancia(km):</label>
                <input type="text" class="form-control" id="distancia" name="distance" placeholder="" required>
              </div>

              <div class="form-group">
                <label for="cliente">Cliente</label>
                <select class="custom-select" required id="cliente" name="customers_id">
                    <option value="0" selected>Cliente sin registrar</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}" selected>{{ $customer }} {{ $customer}}</option>
                    @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="notas">Notas</label>
                <textarea id="notas" name="notes" rows="3" style="resize:none;" class="form-control"></textarea>
              </div>

              <input type="hidden" id="rutaDestino">
              <input type="hidden" id="rutaOrigen">

              
              <hr>
              
              <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                  <a id="ruta" class="btn btn-success"> Ruta </a>
                </div>
                <div class="col-1"></div>
                <div class="col-4">
                  <input type="submit" class="btn btn-danger" value="Enviar">
                </div>
              </div>



            </form>
          </div>
        </div>
      </div>

    </section>
  </div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>





  <script src="{{asset('js/popper.min.js')}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>

  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnmLtj4vdo7Fi698t5xSHzhKo1yrsslUc&libraries=places&callback=initAutocomplete"
    async defer></script>

  <script src="{{asset('js/map_scripts2.js')}}"></script>



</body>

</html>