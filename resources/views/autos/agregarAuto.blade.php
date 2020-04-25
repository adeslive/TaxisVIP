@extends('baseproy')

@section('info')
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card border-primary mb-6" style="max-width: 30rem;">
                <div class="card-header text-primary" style="text-align:center;">Agregar Auto</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('agregarAutoAccion', $idchofer)}}">
                            @csrf
                            <input type="hidden" name="drivers_id" value="{{$idchofer}}">
                            <div class="form-group">
                              <label for="placa">Placa:</label>
                              <input type="text" class="form-control" name="vehiclelicense" placeholder="">
                              <small class="form-text text-muted">@error('vehiclelicense') {{$message}} @enderror</small>
                            </div>
                            <div class="form-group">
                                <label for="marca">Marca:</label>
                                <input type="text" class="form-control" name="brand" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="modelo">Modelo:</label>
                                <input type="text" class="form-control" name="model" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="color">Color:</label>
                                <input type="text" class="form-control" name="color" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="motor">Motor:</label>
                                <input type="text" class="form-control" name="motor" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="vin">Vin:</label>
                                <input type="text" class="form-control" name="vin" placeholder="">
                                <small class="form-text text-muted">@error('vin') {{$message}} @enderror</small>
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
<br><br>
@endsection