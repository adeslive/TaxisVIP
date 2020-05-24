@extends('baseproy')




@section('info')


 <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card border-primary mb-6" style="max-width: 30rem;">
                    <div class="card-header text-primary" style="text-align:center;">Carrera</div>
                        <div class="card-body">
                        <form>  
                                <div style="text-align:center;">  
                                    <a href="https://www.google.es/maps?f=d" target="_blank">  
                                    <img src="{{ asset('img/map.jpg') }}" class="img-rounded" alt="" width="80" height="80"> 
                                    </a>
                                    <p class="text-muted">Hacer click para abrir mapa</p>
                                </div>

                                <div class="form-group">
                                    <label for="origen">Origen:</label>
                                    <input type="text" class="form-control" id="pac-input" placeholder="">
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
                                
                                <div class="form-group">
                                    <label for="cliente">Cliente</label>
                                    <select class="custom-select" required id="cliente">
                                        <option selected>Seleccione cliente</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>on>
                                    </select>
                                </div>
                                  
                                
                                
                                
                                <br>
                                
                                <div style="text-align:center;"><button type="submit" class="btn btn-primary">Enviar</button></div>
                                
                            </form>
                        </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

@endsection

