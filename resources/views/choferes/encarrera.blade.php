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
        <tr>
          <th scope="row" class="align-middle">
            <div style="text-align:center;">
              <span class="fas fa-user fa-4x text-center"></span> 
              <p><small class="text-muted">Nombre Apellido</small></p>  
            </div>               
          </th>
          <td>
            <p><small class="text-muted">No. Placa: </small> <small>PDU8515</small></p>
            <p><small class="text-muted">Telefono: </small> <small>32945113</small></p>
            <p><small class="text-muted">Punto de inicio: </small> <small>Cerro Grande. sector #3</small></p>
            <p><small class="text-muted">Punto Final: </small> <small>Kennedy, primera entrada atras de la colonia</small></p>
          </td>
          <td class="align-middle">
              <fieldset>
                  <div class="form-group">
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck3" checked="">
                          <label class="custom-control-label" for="customCheck3">Cliente en movil</label>
                      </div>
                  </div>
              </fieldset>
          </td>
          <td></td>
          <td class="align-middle"><button type="button" class="btn btn-primary align-middel">Terminar Carrera</button></td>
        </tr>
      @endforeach

    </tbody>
  </table>
</div>
<div class="col-md-12 text-center">
    <ul class="pagination pagination-lg pager" id="myPager"></ul>
</div>



@endsection