@extends('baseproy')

@section('info')
<div class="container">
<div class="row">

@foreach($zonas as $zona)
<div class="col-4">
  <div class = "card border-warning mb-3" style = "max-width: 20rem;">
    <div class = "card-header text-center"> Zona </div>
    <div class = "card-body">
      <h4 class = "card-title">  {{ $zona->zones }}  </h4>
      <p class = "card-text">  <strong>Colonias: </strong> 
      @php ($coloniesArray = $zona->colonies->toArray())

      @for ($i = 0; $i < sizeof($coloniesArray); $i++)
        {{ $coloniesArray[$i]['colony'] }}
        @if ($i < sizeof($coloniesArray ) -1 )
        ,
        @endif   
      @endfor </p>
      <hr>
      <div style="text-align:center;">
          <a href="{{ route('zona', $zona->id) }}" class="btn btn-warning">Ver zona</a>
      </div>
    </div>
  </div>
</div>
@endforeach
</div>
{{ $zonas->links() }}
</div>
@endsection