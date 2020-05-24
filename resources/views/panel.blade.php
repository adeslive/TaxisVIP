@extends('baseproy')

@section('info')
<div class="row mx-2">

    <div class="col mb-2" style="overflow-y:auto">
        <div class="card" style="width: 100%">
            <div class="card-header">
                <h5>Activos</h5>
            </div>
            <div class="card-body">
                <div class="row my-2">
                    @foreach ($choferesActivos as $chofer)
                    <div class="col-sm-2 p-2 justify-content-center"
                    data-toggle="popover" data-placement="bottom"
                            title="{{ $chofer->person->name . ' ' . $chofer->person->lastname }}"
                            data-trigger="click"
                            data-html="true"
                            data-content="<a class='btn btn-warning' href='{{ route('inactivar', $chofer->id) }}' type='button'> Desactivar </a> <a class='btn btn-success' href='{{ route('carrera', $chofer->id) }}' type='button'> Carrera </a>">
                        <i class="fas fa-user fa-3x"></i>
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
                    <div class="col-sm-2 p-2 justify-content-center">
                        <i class="fas fa-user fa-3x" style="margin:auto" data-toggle="popover" data-placement="bottom"
                            title="{{ $chofer->person->name . ' ' . $chofer->person->lastname }}"
                            data-trigger="click"
                            data-html="true"
                            data-content="<a class='btn btn-primary' href='{{ route('activar', $chofer->id) }}' type='button'> Activar </a>"></i>
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
                    <div class="col-sm-2 p-2 justify-content-center">
                        <i class="fas fa-user fa-3x" style="margin:auto" data-toggle="popover" data-placement="bottom"
                            title="{{ $chofer->person->name . ' ' . $chofer->person->lastname }}"
                            data-trigger="click"
                            data-html="true"
                            data-content="<a class='btn btn-primary' href='' type='button'> Ver Carrera </a>"></i>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row"></div>
@endsection

@section('scripts')
<script>
    $(function () {
        $('[data-toggle="popover"]').click(()=>{
            $("[data-toggle='popover']").popover('hide');
        })
        $('[data-toggle="popover"]').popover({
            container: 'body'
        })
    })
</script>
@endsection