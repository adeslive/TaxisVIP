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
                    @foreach ($drivers as $driver)
                    @if($driver->status == 1 && $driver->careerstatus == 0)
                    <div class="col-sm-2 p-2 justify-content-center">
                        @if ($driver->photo == null)
                            <i class="fas fa-user fa-3x" style="margin:auto" data-toggle="popover" data-placement="bottom"
                            title="{{ $driver->person->name . ' ' . $driver->person->lastname }}"
                            data-trigger="click"
                            data-html="true"
                            data-content="<a class='btn btn-warning' href='{{ route('inactivar', $driver->id) }}' type='button'> Desactivar </a>"></i>
                        @else
                            <img width="45" src="{{ asset('storage') . '/' . $driver->photo }}" style="margin:auto" data-toggle="popover" data-placement="bottom"
                                title="{{ $driver->person->name . ' ' . $driver->person->lastname }}"
                                data-trigger="click"
                                data-html="true"
                                data-content="<a class='btn btn-warning' href='{{ route('inactivar', $driver->id) }}' type='button'> Desactivar </a>">
                        @endif
                    </div>
                    @endif
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
                    @foreach ($drivers as $driver)
                    @if($driver->status == 0)
                    <div class="col-sm-2 p-2 justify-content-center">
                        @if ($driver->photo == null)
                            <i class="fas fa-user fa-3x" style="margin:auto" data-toggle="popover" data-placement="bottom"
                            title="{{ $driver->person->name . ' ' . $driver->person->lastname }}"
                            data-trigger="click"
                            data-html="true"
                            data-content="<a class='btn btn-primary' href='{{ route('activar', $driver->id) }}' type='button'> Activar </a>"></i>
                        @else
                            <img width="45" src="{{ asset('storage') . '/' . $driver->photo }}" style="margin:auto" data-toggle="popover" data-placement="bottom"
                                title="{{ $driver->person->name . ' ' . $driver->person->lastname }}"
                                data-trigger="click"
                                data-html="true"
                                data-content="<a class='btn btn-primary' href='{{ route('activar', $driver->id) }}' type='button'> Activar </a>">
                        @endif
                    </div>
                    @endif
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
                    @foreach ($drivers as $driver)
                    @if($driver->status == 1 && $driver->careerstatus == 1)
                    <div class="col-sm-2 p-2 justify-content-center">
                        @if ($driver->photo == null)
                            <i class="fas fa-user fa-3x" style="margin:auto" data-toggle="popover" data-placement="bottom"
                            title="{{ $driver->person->name . ' ' . $driver->person->lastname }}"
                            data-trigger="click"
                            data-html="true"
                            data-content="<a class='btn btn-primary' href='{{ route('activar', $driver->id) }}' type='button'> Terminar Carrera </a>"></i>
                        @else
                            <img width="45" src="{{ asset('storage') . '/' . $driver->photo }}" style="margin:auto" data-toggle="popover" data-placement="bottom"
                                title="{{ $driver->person->name . ' ' . $driver->person->lastname }}"
                                data-trigger="click"
                                data-html="true"
                                data-content="<a class='btn btn-primary' href='{{ route('activar', $driver->id) }}' type='button'> Terminar Carrera </a>">
                        @endif
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('foot')

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