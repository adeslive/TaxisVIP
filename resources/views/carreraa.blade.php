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
        <div class="container-fluid">
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
    </header>


            <div class="container-fluid">
                <section class="view">
              
                  <div class="container1">
                        <div id="map" class="capa1"></div>
                            
                            
                        <div id="data" class="capa2">
                            <br>
                            <div class="container">
                                <h4 class="text-primary text-center;"> <strong> Carrera</strong><h4>
                            </div>
                            
                            <hr>
                            <div class="container">
                                
                            
                            <form>
                                <div class="form-group">
                                    <label for="origen">Origen:</label>
                                    <input type="text" class="form-control" id="pac-input" placeholder="SearchBox">
                                </div>
                                <div class="form-group">
                                  <label for="destino">Destino:</label>
                                  <input type="text" class="form-control" id="destino" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="distancia">Distancia:</label>
                                    <input type="text" class="form-control" id="distancia" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="precio">Precio:</label>
                                    <input type="text" class="form-control" id="precio" placeholder="">
                                </div>
                                  
                                
                                
                                <br>
                                <hr>
                                <br>
                                <div style="text-align:center;"><button type="submit" class="btn btn-danger">Enviar</button></div>
                                
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

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT6SpX1f9kQDnQfl3DQPajirG40bjvzDg&callback=initMap">
    </script>

    <script src="{{asset('js/map_scripts.js')}}"></script>

    
  </body>
</html>