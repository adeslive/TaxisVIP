@extends('baseproy')

@section('info')
<div class="container">
<div class="row">

@foreach($zonas as $zona)
<div class="col-4">
  <div class = "card @if($zona->active == 1) border-success @else border-danger @endif mb-3" style = "max-width: 20rem;">
    <div class = "card-header text-center">  <h4 class = "card-title">  {{ $zona->zones }}  </h4> </div>
    <div class = "card-body">
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
          <a href="{{ route('zona', $zona->id) }}" class="btn @if($zona->active == 1) btn-success @else btn-danger @endif">Ver zona</a>
      </div>
    </div>
  </div>
</div>
@endforeach
</div>
{{ $zonas->links() }}
</div>
@endsection