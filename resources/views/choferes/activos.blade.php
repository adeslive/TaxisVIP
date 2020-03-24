@extends('baseproy')

@section('info')

<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col" class="text-primary">Activos</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody id="myTable">
      
      <tr>
        <th scope="row" class="align-middle">
          <div style="text-align:center;">
            <span class="fas fa-user fa-4x text-center"></span> 
            <p><small class="text-muted">Nombre Apellido</small></p>  
          </div>               
        </th>
        <td>
          <p><small class="text-muted">No. Placa: </small> <small>PDU8515</small><small>&nbsp  &nbsp</small><small class="text-muted">Telefono: </small> <small>32945113</small></p>
          <p><small class="text-muted">Descripcion vehiculo: </small><small><div class="10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ut quod totam ducimus explicabo, hic libero inventore quisquam amet, iusto omnis eos corporis adipisci aliquid sapiente consectetur error. Excepturi, nam?</div></small></p>
        </td>
        <td class="align-middle">
          <div style="text-align:center;">
          <p class="text-muted">Kilometros recorridos: </p>
          <h4>24.21</h4>
        </div>
        </td>
        <td class="align-middle"><button type="button" class="btn btn-outline-secondary ">Inactivar</button></td>
        <td class="align-middle"><button type="button" class="btn btn-success align-middel">Carrera</button></td>
      </tr>

      <tr>
        <th scope="row" class="align-middle">
          <div style="text-align:center;">
            <span class="fas fa-user fa-4x text-center"></span> 
            <p><small class="text-muted">Nombre Apellido</small></p>  
          </div>                     
        </th>
        <td>
          <p><small class="text-muted">No. Placa: </small> <small>PDU8515</small><small>&nbsp  &nbsp</small><small class="text-muted">Telefono: </small> <small>32945113</small></p>
          <p><small class="text-muted">Descripcion vehiculo: </small><small><div class="10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ut quod totam ducimus explicabo, hic libero inventore quisquam amet, iusto omnis eos corporis adipisci aliquid sapiente consectetur error. Excepturi, nam?</div></small></p>
        </td>
        <td class="align-middle">
          <div style="text-align:center;">
          <p class="text-muted">Kilometros recorridos: </p>
          <h4>24.89</h4>
        </div>
        </td>
        <td class="align-middle"><button type="button" class="btn btn-outline-secondary align-self-center">Inactivar</button></td>
        <td class="align-middle"><button type="button" class="btn btn-success align-self-center">Carrera</button></td>
      </tr>

      <tr>
        <th scope="row" class="align-middle">
          <div style="text-align:center;">
            <span class="fas fa-user fa-4x text-center"></span> 
            <p><small class="text-muted">Nombre Apellido</small></p>  
          </div>               
        </th>
        <td>
          <p><small class="text-muted">No. Placa: </small> <small>PDU8515</small><small>&nbsp  &nbsp</small><small class="text-muted">Telefono: </small> <small>32945113</small></p>
          <p><small class="text-muted">Descripcion vehiculo: </small><small><div class="10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ut quod totam ducimus explicabo, hic libero inventore quisquam amet, iusto omnis eos corporis adipisci aliquid sapiente consectetur error. Excepturi, nam?</div></small></p>
        </td>
        <td class="align-middle">
          <div style="text-align:center;">
          <p class="text-muted">Kilometros recorridos: </p>
          <h4>24.21</h4>
        </div>
        </td>
        <td class="align-middle"><button type="button" class="btn btn-outline-secondary ">Inactivar</button></td>
        <td class="align-middle"><button type="button" class="btn btn-success align-middel">Carrera</button></td>
      </tr>

      <tr>
        <th scope="row" class="align-middle">
          <div style="text-align:center;">
            <span class="fas fa-user fa-4x text-center"></span> 
            <p><small class="text-muted">Nombre Apellido</small></p>  
          </div>                     
        </th>
        <td>
          <p><small class="text-muted">No. Placa: </small> <small>PDU8515</small><small>&nbsp  &nbsp</small><small class="text-muted">Telefono: </small> <small>32945113</small></p>
          <p><small class="text-muted">Descripcion vehiculo: </small><small><div class="10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ut quod totam ducimus explicabo, hic libero inventore quisquam amet, iusto omnis eos corporis adipisci aliquid sapiente consectetur error. Excepturi, nam?</div></small></p>
        </td>
        <td class="align-middle">
          <div style="text-align:center;">
          <p class="text-muted">Kilometros recorridos: </p>
          <h4>24.89</h4>
        </div>
        </td>
        <td class="align-middle"><button type="button" class="btn btn-outline-secondary align-self-center">Inactivar</button></td>
        <td class="align-middle"><button type="button" class="btn btn-success align-self-center">Carrera</button></td>
      </tr>
    </tbody>
  </table>
</div>
<div class="col-md-12 text-center">
    <ul class="pagination pagination-lg pager" id="myPager"></ul>
</div>
@endsection