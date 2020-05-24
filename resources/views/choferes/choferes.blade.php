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
            <p><small class="text-muted">{{$chofer->person->name}} {{$chofer->person->lastname}}</small></p>  
          </div>               
        </th>
        <td class="align-middle">
          <p><small class="text-muted">Telefono: </small> <small>{{$chofer->person->phone}}</small></p>
          <p><small class="text-muted">Correo: </small> <small>{{$chofer->person->email}}</small></p>
          <p><small class="text-muted">Zona: </small> <small>{{ $chofer->zone->zones }}</small></p>
        </td>
        <td class="align-middle">
            <p><small class="text-muted">Vehiculo en uso: </small></p>
            <fieldset>
              <div class="form-group col-10">
                <select class="custom-select">
                  @foreach($chofer->cars as $car)
                    <option value="{{$car->id}}" @if($car->designated == 1) selected @endif>{{$car->vehiclelicense}}</option>
                  @endforeach
                </select>
              </div>
            </fieldset>
            
        </td>
        <td class="align-middle"><a type="button" class="btn btn-outline-success" href="{{route('agregarAuto', $chofer->id)}}">Agregar Auto</a></td>
        <td class="align-middle"><a type="button" class="btn btn-primary" href="{{route('modificarChofer', $chofer->id)}}">Modificar</a></td>
        <td class="align-middle"><a type="button" class="btn btn-danger" href="{{route('crearMulta',$chofer->id)}}"> Multa </a></td>
        <td class="align-middle"><a type="button" class="btn btn-outline-danger" href="{{route('multas',$chofer->id)}}"> Lista multas </a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{ $choferes->links() }}



@endsection
