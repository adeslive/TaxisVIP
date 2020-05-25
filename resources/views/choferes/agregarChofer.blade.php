@extends('baseproy')

@section('info')
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card border-primary mb-6" style="max-width: 30rem;">
                <div class="card-header text-primary" style="text-align:center;">Agregar Chofer</div>
                <div class="card-body">
                    <form action="{{ route('crearChoferAccion') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("POST")
                            <div class="form-group">
                                <label for="fotoChofer">Foto:</label>
                                <input type="file" class="form-control" id="fotoChofer" name="photo" placeholder=""> 
                            </div>
                            <div class="form-group">
                                <label for="nombreChofer">Nombre:</label>
                                <input type="text" required class="form-control" id="nombreChofer" name="name" placeholder=""> 
                            </div>
                            <div class="form-group">
                                <label for="apellidoChofer">Apellido:</label>
                                <input type="text" required class="form-control" id="apellidoChofer" name="lastname" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="emailChofer">Identidad:</label>
                                <input type="text" required class="form-control" id="identidadChofer" name="identity" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="licenciaChofer">Licencia:</label>
                                <input type="text" required class="form-control" id="licenciaChofer" name="license"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="telefonoChofer">Telefono:</label>
                                <input type="tel" required class="form-control" id="telefonoChofer" name="phone" maxlength=8 pattern="[0-9]{4}[0-9]{4}" placeholder="">
                                <small class="form-text text-muted">@error('phone') {{$message}} @enderror</small>
                            </div>
                            
                            <div class="form-group">
                                <label for="emailChofer">Email:</label>
                                <input type="email" required class="form-control" id="emailChofer" name="email" placeholder="" > 
                                <small class="form-text text-muted">@error('email') {{$message}} @enderror</small>
                            </div>

                            <div class="form-group">
                                <label for="zonaChofer">Zona</label>
                                <select class="form-control" required id="zonaChofer" name="zones_id">
                                    @foreach($zones as $zona)
                                    @if ($loop->iteration == 1)
                                    <option selected value="{{$zona->id}}">{{$zona->zones}}</option>
                                    @else
                                    <option value="{{$zona->id}}">{{$zona->zones}}</option>
                                    @endif
                                    @endforeach
                                </select>
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