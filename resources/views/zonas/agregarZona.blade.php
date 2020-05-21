@extends('baseproy')

@section('info')
<div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card border-warning mb-6" style="max-width: 30rem;">
                    <div class="card-header text-warning" style="text-align:center;">Agregar Zona</div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                  <label for="nombreChofer">Nombre Zona:</label>
                                  <input type="text" class="form-control" id="nombreChofer" placeholder="">
                                </div>
                                
                                
                                <br>
                                <div style="text-align:center;"><button type="submit" class="btn btn-warning">Agregar</button></div>
                                
                              </form>
                        </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

@endsection