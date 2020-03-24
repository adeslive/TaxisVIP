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
        <td></td>
        <td class="align-middle"><button type="button" class="btn btn-primary align-middel">Activar</button></td>
        <td></td>
        
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
        <td></td>
        <td class="align-middle"><button type="button" class="btn btn-primary align-middel">Activar</button></td>
        <td></td>
        
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
        <td></td>
        <td class="align-middle"><button type="button" class="btn btn-primary align-middel">Activar</button></td>
        <td></td>
        
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
        <td></td>
        <td class="align-middle"><button type="button" class="btn btn-primary align-middel">Activar</button></td>
        <td></td>
        
      </tr>

      
      
    </tbody>
  </table>
</div>
<div class="col-md-12 text-center">
    <ul class="pagination pagination-lg pager" id="myPager"></ul>
</div>
@endsection