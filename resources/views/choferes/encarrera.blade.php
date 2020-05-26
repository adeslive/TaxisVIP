@extends('baseproy')

@section('info')
    
<div class="table-responsive">
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col" class="text-success">En carrera</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody id="myTable">
      
      @foreach ($drivers as $driver)
      @foreach($driver->orders as $order) @if($order->status != 0) @php($selectedOrder = $order) @endif @endforeach
      @isset($selectedOrder)
        <tr>
          <th scope="row" class="align-middle">
            <div style="text-align:center;">
              @if ($driver->photo == null) <span class="fas fa-user fa-4x text-center"></span> @else <img src="{{ asset('storage') . '/'. $driver->photo }}" width="61"> @endif 
              <p><small class="text-muted">Nombre Apellido</small></p>  
            </div>               
          </th>
          <td>
           
            <p><small class="text-muted">No. Placa: </small> <small>@foreach ($driver->cars as $car) @if($car->designated) {{ $car->vehiclelicense }} @endif @endforeach</small></p>
            <p><small class="text-muted">Telefono: </small> <small>{{ $driver->person->phone }}</small></p>
            <p><small class="text-muted">Punto de inicio: </small> <small> {{ $selectedOrder->origin }} </small></p>
            <p><small class="text-muted">Punto Final: </small> <small> {{ $selectedOrder->destination }} </small></p>
            
          </td>
          <td class="align-middle">
              <fieldset>
                  <div class="form-group">
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="check-{{ $driver->id }}" @if($selectedOrder->status == 1) checked @endif readonly>
                          <label class="custom-control-label" for="check-{{ $driver->id }}">Cliente en movil</label>
                      </div>
                  </div>
              </fieldset>
          </td>
          
          <td></td>
          <td class="align-middle"><button type="button" class="btn btn-primary align-middel">Terminar Carrera</button></td>
        </tr>
        @endisset
      @endforeach

    </tbody>
  </table>
</div>
<div class="col-md-12 text-center">
    <ul class="pagination pagination-lg pager" id="myPager"></ul>
</div>



@endsection