@extends('baseproy')

@section('info')
    
<div class="table-responsive">
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col"> <strong>Choferes</strong></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody id="myTable">
      @foreach($choferes as $chofer)
      <tr @if($chofer->status == 0) style="opacity: 0.7" @endif>
        <th scope="row" class="align-middle">
          <div style="text-align:center;">
            <span class="fas fa-user fa-4x text-center"></span> 
            <p><small class="text-muted">{{$chofer->name}} {{$chofer->lastname}}</small></p>  
          </div>               
        </th>
        <td class="align-middle">
          <p><small class="text-muted">Telefono: </small> <small>{{$chofer->phone}}</small></p>
          <p><small class="text-muted">Correo: </small> <small>{{$chofer->mail}}</small></p>
          <p><small class="text-muted">Zona: </small> <small>{{$chofer->zones}}</small></p>
        </td>
        <td class="align-middle">
            <p><small class="text-muted">Vehiculo en uso: </small></p>
            <fieldset>
              <div class="form-group col-10">
                <select class="custom-select">
                  <option selected=""># de Placa</option>
                  @foreach($autos as $auto)
                  @if ($auto->drivers_id == $chofer->id)
                  <option value="{{$auto->id}}" @if($auto->designated == 1) selected @endif>{{$auto->vehiclelicense}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
            </fieldset>
            
        </td>
        <td class="align-middle"><a type="button" class="btn btn-outline-success" href="{{route('agregarAuto', $chofer->idchofer)}}">Agregar Auto</a></td>
        <td class="align-middle"><a type="button" class="btn btn-primary" href="{{route('modificarChofer', $chofer->idchofer)}}">Modificar</a></td>
        <td class="align-middle"><a type="button" class="btn btn-danger" href="{{route('crearMulta',$chofer->idchofer)}}"> Multa </a></td>
        <td class="align-middle"><a type="button" class="btn btn-outline-danger"> Lista multas </a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{ $choferes->links() }}



@endsection
