@extends('baseproy')

@section('info')
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card border-primary mb-6" style="max-width: 30rem;">
                    <div class="card-header text-primary" style="text-align:center;">Agregar Chofer</div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                  <label for="nombreChofer">Nombre:</label>
                                  <input type="text" class="form-control" id="nombreChofer" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="apellidoChofer">Apellido:</label>
                                    <input type="text" class="form-control" id="apellidoChofer" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="telefonoChofer">Telefono:</label>
                                    <input type="text" class="form-control" id="telefonoChofer" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="emailChofer">Email:</label>
                                    <input type="email" class="form-control" id="emailChofer" placeholder="">
                                </div>
                                <br>
                                <hr>
                                <div style="text-align:center;"><button type="submit" class="btn btn-primary">Submit</button></div>
                                
                              </form>
                        </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection