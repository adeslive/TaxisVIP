@extends('baseproy')

@section('info')
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card border-info mb-6" style="max-width: 30rem;">
                <div class="card-header text-info" style="text-align:center;">Agregar Cliente</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                              <label for="nombreCliente">Nombre:</label>
                              <input type="text" class="form-control" id="nombreCliente" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="apellidoCliente">Apellido:</label>
                                <input type="text" class="form-control" id="apellidoCliente" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="telefonoCliente">Telefono:</label>
                                <input type="text" class="form-control" id="telefonoCliente" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="idCliente">ID:</label>
                                <input type="text" class="form-control" id="idCliente" placeholder="">
                            </div>
                        
                            
                            <br>
                            <hr>
                            <div style="text-align:center;"><button type="submit" class="btn btn-info">Submit</button></div>
                            
                          </form>
                    </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
    
@endsection