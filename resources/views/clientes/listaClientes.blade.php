@extends('baseproy')

@section('head')
<link rel="stylesheet" href="{{asset('css/tabla.css')}}">
@endsection

@section('info')

<h2 class="text-info">Clientes</h2>

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
        <th>ID Cliente</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        </tr>
        <tr class="warning no-result">
        <td colspan="4"><i class="fa fa-warning"></i> No results</td>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr>
            <th scope="row">{{ $customer->id }}</th>
            <td>{{ $customer->person->name }} {{ $customer->person->lastname }}</td>
            <td>{{ $customer->person->email }}</td>
            <td>{{ $customer->person->phone }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection

@section('foot')
    <script src="{{asset('js/tabla.js')}}"></script>
@endsection