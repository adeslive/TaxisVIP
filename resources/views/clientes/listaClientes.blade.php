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
        <th>#</th>
        <th>Nombre</th>
        <th>ID</th>
        <th>Telefono</th>
        </tr>
        <tr class="warning no-result">
        <td colspan="4"><i class="fa fa-warning"></i> No results</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">12</th>
            <td>Carlos Flores</td>
            <td>0801-1997-15548</td>
            <td>32699874</td>
        </tr>
        <tr>
            <th scope="row">15</th>
            <td>Alejandro Zuniga</td>
            <td>0801-1996-15447</td>
            <td>25253265</td>
        </tr>
        <tr>
            <th scope="row">17</th>
            <td>Roberto Mendez</td>
            <td>0801-1995-78587</td>
            <td>95179638</td>
        </tr>
        <tr>
            <th scope="row">12</th>
            <td>Arnold Flores</td>
            <td>0801-1998-56987</td>
            <td>22243385</td>
        </tr>
        <tr>
            <th scope="row">15</th>
            <td>Fernando Zuniga</td>
            <td>0801-1993-25654</td>
            <td>36975415</td>
        </tr>
        <tr>
            <th scope="row">12</th>
            <td>Arnold Flores</td>
            <td>0801-1998-56987</td>
            <td>22243385</td>
        </tr>
        <tr>
            <th scope="row">15</th>
            <td>Fernando Zuniga</td>
            <td>0801-1993-25654</td>
            <td>36975415</td>
        </tr>
    </tr>


        
    </tbody>
    </table>
</div>
@endsection

@section('foot')
    <script src="{{asset('js/tabla.js')}}"></script>
@endsection