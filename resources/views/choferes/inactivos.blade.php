@extends('baseproy')

@section('info')

<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col" class="text-muted">Inactivos</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody id="myTable">

      @foreach ($choferes as $chofer)
      <tr>
        <th scope="row" class="align-middle">
          <div style="text-align:center;">
            @if ($chofer->photo == null) <span class="fas fa-user fa-4x text-center"></span> @else <img src="{{ asset('storage') . '/'. $chofer->photo }}" width="61"> @endif
            <p><small class="text-muted">{{$chofer->person->name}} {{$chofer->person->lastname}}</small></p>
          </div>
        </th>
        <td>
          @foreach($chofer->cars as $auto)
            @if ($auto->designated == 1)
          <p><small class="text-muted">No. Placa: </small> <small>{{$auto->vehiclelicense}}</small><small>&nbsp
              &nbsp</small><small class="text-muted">Telefono: </small> <small>{{$chofer->phone}}</small></p>
          <p><small class="text-muted">Descripcion vehiculo: </small><small>
              <div class="10">Auto marca {{$auto->brand}}, modelo {{$auto->model}}, color {{$auto->color}}.</div>
            </small></p>
            @endif
          @endforeach
        </td>
        <td class="align-middle">
          <div style="text-align:center;">
            <p class="text-muted">Kilometros recorridos: </p>
            <h4>{{$chofer->mileage}}</h4>
          </div>
        </td>
        @if($chofer->zone->active == 1 ) 
          <td class="align-middle"><a type="button" class="btn btn-primary" href="{{route('activar', $chofer->id)}}">Activar</a></td>
        @else
        <td class="align-middle"><a type="button" class="btn btn-primary disabled" disabled>Sin Zona</a></td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{$choferes->links()}}
@endsection