@extends('baseproy')

@section('head')
<link rel="stylesheet" href="{{asset('css/scroller.css')}}">
@endsection

@section('info')

<div class="container">
<div class="row">
    <div class="col-7">
        <div class="card border-warning">
        <div class = "card-header text-center"> <h4> Nombre Zona</h4></div>
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
                        <tr>
                        <td scope="row">1</td>
                        <td>Cerro Grande</td>
                        <td class="align-middle">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </td>
                        </tr>

                        <tr>
                        <td scope="row">2</td>
                        <td>Col. Roble Oeste</td>
                        <td class="align-middle">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </td>
                        </tr>

                        <tr>
                        <td scope="row">3</td>
                        <td>Res. Las Uvas</td>
                        <td class="align-middle">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </td>
                        </tr>

                        <tr>
                        <td scope="row">4</td>
                        <td>Hato de enmedio</td>
                        <td class="align-middle">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </td>
                        </tr>

                        <tr>
                        <td scope="row">5</td>
                        <td>Villa Nueva</td>
                        <td class="align-middle">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </td>
                        </tr>

                        <tr>
                        <td scope="row">6</td>
                        <td>Villas del sol</td>
                        <td class="align-middle">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </td>
                        </tr>
                    
                    </tbody>
                    </table>
                </div>
                <br>
                <br>
                <div style="text-align:right;">
                    <button type="button" class="btn btn-danger"> Eliminar Zona </button>
                </div>
                <br>

            </div>
        </div>
    </div>
    <div class="col-5"> 
        <div class="card border-warning">
            <div class = "card-header text-center"> <h4>Agregar colonia</h4></div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="nombreColonia">Nombre colonia:</label>
                        <input type="text" class="form-control" id="nombreColonia" placeholder="">
                    </div>

                    <br>
                    <div style="text-align:center;"><button type="submit" class="btn btn-warning">Agregar</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection