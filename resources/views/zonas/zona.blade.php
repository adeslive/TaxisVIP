@extends('baseproy')

@section('head')
<link rel="stylesheet" href="{{asset('css/scroller.css')}}">
@endsection

@section('info')

<div class="container">
<div class="row">
    <div class="col-7">
        <div class="card @if($zone->active == 1) border-success @else border-danger @endif">
        <div class = "card-header text-center"> <h4>{{ $zone->zones }}</h4></div>
            <div class="card-body">
                <h4 class = "card-title">Colonias:</h4>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table  table-striped mb-0">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre colonia</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($zone->colonies as $colony)
                            <tr>
                                <td scope="row">{{ $colony->id }}</td>
                                <td>{{ $colony->colony }}</td>
                                <td class="align-middle">
                                    <form id="{{ 'colonia-' . $colony->id }}" action="{{ route('borrarColonia', $colony->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button data-colony="{{ $colony->id }}" type="button" class="close delete" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
    
                @if($zone->active == 1)
                <form action="{{ route('desactivarZona', $zone->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div style="text-align:right;">
                        <button type="submit" class="btn btn-danger"> Desactivar zona </button>
                    </div>
                </form>
                @else
                <form action="{{ route('activarZona', $zone->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div style="text-align:right;">
                        <button type="submit" class="btn btn-success"> Activar zona </button>
                    </div>
                </form>
                @endif 
                <br>
            </div>
        </div>
    </div>
    <div class="col-5"> 
        <div class="card @if($zone->active == 1) border-success @else border-danger @endif">
            <div class = "card-header text-center"> <h4>Agregar colonia</h4></div>
            <div class="card-body">
                <form action="{{ route('crearColonia', $zone->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="colony">Nombre colonia:</label>
                        <input type="text" class="form-control" name="colony" placeholder="" required>
                    </div>

                    <br>
                    <div style="text-align:center;"><input type="submit" class="btn btn-warning" value="Agregar Colonia"></div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('scripts')
<script>
    $(function(){
        $('.delete').click(function(){
            $('#colonia-' + $(this).data('colony')).trigger('submit');
        })
    })
</script>
@endsection