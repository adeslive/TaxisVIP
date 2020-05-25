@extends('baseproy')

@section('head')
<link rel="stylesheet" href="{{asset('css/tabla.css')}}">
@endsection

@section('info')

<h2 class="text-success">Carreras</h2>

<hr>
<div class="row">
    <div class="form-group col">
        <span class="float-right"><input type="text" class="search form-control" placeholder="Buscador"></span>
        <span class="counter"></span>
    </div>
</div>

<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table class="table table-hover table-bordered results">
    <thead>
        <tr>
        <th>ID</th>
        <th>Chofer</th>
        <th>Origen</th>
        <th>Destino</th>
        <th>Precio</th>
        <th>Fecha</th>
        <th>Estado</th>
        </tr>
        <tr class="warning no-result">
        <td colspan="4"><i class="fa fa-warning"></i> No results</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <th scope="row">{{ $order->id }}</th>
            <td>{{ $order->driver->person->name }} {{ $order->driver->person->lastname }}</td>
            <td>{{ $order->origin }}</td>
            <td>{{ $order->destination }}</td>
            <td>{{ $order->price }}</td>
            <td>{{ $order->created_at }}</td>
            <td>@switch($order->status)
                @case(1)
                    Completada
                    @break
                @case(2)
                    En el taxi
                    @break
                @case(2)
                    Petición
                    @break
                @default
                    
            @endswitch</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection

@section('foot')
    <script src="{{asset('js/tabla.js')}}"></script>
@endsection