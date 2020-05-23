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
        </tr>
        <tr class="warning no-result">
        <td colspan="4"><i class="fa fa-warning"></i> No results</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">12</th>
            <td>Carlos Flores</td>
            <td>Cerro Grande</td>
            <td>Hato</td>
            <td>120</td>
            <td>23/05/2020</td>
        </tr>
        <tr>
            <th scope="row">15</th>
            <td>Alejandro Zuniga</td>
            <td>Col el carrizal</td>
            <td>La kennedy</td>
            <td>140</td>
            <td>20/05/2020</td>
        </tr>
        <tr>
            <th scope="row">17</th>
            <td>Roberto Mendez</td>
            <td>Roble Oeste</td>
            <td>Aeropuerto</td>
            <td>100</td>
            <td>23/04/2020</td>
        </tr>
        <tr>
            <th scope="row">18</th>
            <td>Carlos Flores</td>
            <td>Villa cristina</td>
            <td>La nueva era</td>
            <td>120</td>
            <td>19/05/2020</td>
        </tr>
        <tr>
            <th scope="row">12</th>
            <td>Arnold Flores</td>
            <td>Kennedy</td>
            <td>Hato</td>
            <td>125</td>
            <td>23/05/2020</td>
        </tr>
        <tr>
            <th scope="row">15</th>
            <td>Fernando Zuniga</td>
            <td>Col el carrizal</td>
            <td>La kennedy</td>
            <td>160</td>
            <td>12/05/2020</td>
        </tr>
    </tr>
    <tr>
        <th scope="row">15</th>
        <td>Alejandro Zuniga</td>
        <td>Col el carrizal</td>
        <td>La kennedy</td>
        <td>140</td>
        <td>20/05/2020</td>
    </tr>
    <tr>
        <th scope="row">17</th>
        <td>Roberto Mendez</td>
        <td>Roble Oeste</td>
        <td>Aeropuerto</td>
        <td>100</td>
        <td>23/04/2020</td>
    </tr>
    <tr>
        <th scope="row">18</th>
        <td>Carlos Flores</td>
        <td>Villa cristina</td>
        <td>La nueva era</td>
        <td>120</td>
        <td>19/05/2020</td>
    </tr>

        
    </tbody>
    </table>
</div>
@endsection

@section('foot')
    <script src="{{asset('js/tabla.js')}}"></script>
@endsection