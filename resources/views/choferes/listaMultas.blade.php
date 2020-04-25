@extends('baseproy')

@section('info')
<div class="container">
  <div class="row">
  @foreach ($multas as $multa)
    <div class="col-4">
      <div class = "card border-danger mb-3" style = "max-width: 20rem;">
        <div class = "card-header"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> Multa </font> </font> <small>{{$multa->created_at}}</small></div>
        <div class = "card-body">
          <h4 class = "card-title"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> Penalizacion: Lps. {{$multa->price}}</font> </font> </h4>
          <p class = "card-text"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> <strong>Descripcion: </strong> {{$multa->infractions}}</font> </font> </p>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</div>
@endsection