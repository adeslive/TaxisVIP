@extends('baseproy')

@section('info')
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card border-secundary mb-6" style="max-width: 30rem;">
                <div class="card-header text-danger" style="text-align:center;">Multa</div>
                    <div class="card-body">
                        <form action="{{route('crearMultaAccion', $idChofer)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="descripcion">Descripcion:</label>
                                <textarea class="form-control" id="descripcion" name="infractions" rows="3"></textarea>
                                <small class="form-text text-muted">@error('infractions') {{$message}} @enderror</small>
                            </div>
                            
                            <div class="form-group">
                              <label for="penalizacion">Penalizacion:</label>
                              <input type="number" class="form-control" id="penalizacion" name="price" placeholder="">
                              <small class="form-text text-muted">@error('price') {{$message}} @enderror</small>
                            </div>
                            
                            <br>
                            <hr>
                            <div style="text-align:center;"><button type="submit" class="btn btn-danger">Enviar</button></div>
                            
                          </form>
                    </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<br><br>
@endsection