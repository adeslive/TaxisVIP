@extends('baseproy')

@section('info')
<div class="row mx-2">

    <div class="col mb-2" style="overflow-y:auto">
        <div class="card" style="width: 100%">
            <div class="card-header">
                <h5>Activos</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($choferesActivos as $chofer)
                    <div class="col-sm-3 my-1">
                        <i class="fas fa-user fa-2x" data-toggle="tooltip" data-placement="top"
                            title="{{ $chofer->name . ' ' . $chofer->lastname }}"></i>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col" style="overflow-y:auto">
        <div class="card" style="width: 100%">
            <div class="card-header">
                <h5>Inactivos</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($choferesInactivos as $chofer)
                    <div class="col-sm-3 my-1">
                        <i class="fas fa-user fa-2x" data-toggle="tooltip" data-placement="top"
                            title="{{ $chofer->name . ' ' . $chofer->lastname }}"></i>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="col" style="overflow-y:auto">
        <div class="card" style="width: 100%">
            <div class="card-header">
                <h5>En carrera</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($choferesEnCarrera as $chofer)
                    <div class="col-sm-3 my-1">
                        <i class="fas fa-user fa-2x" data-toggle="tooltip" data-placement="top"
                            title="{{ $chofer->name . ' ' . $chofer->lastname }}"></i>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row"></div>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection