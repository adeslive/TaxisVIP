@extends('choferesMovil.plantilla')
@section('content')

   <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-sm-12 ">
                <p><strong>TaxisVIP </strong>te facilita algunas opciones que te ayudaran en el transcurso de cada carrera que realizes.</p>
            </div>

            <div class="col-12 col-sm-12 ">
                    <div id="iniciar">
                        <table class = "table table-light ">
                            <thead>
                                <tr><th style="color: blue;">Acción a Realizar:</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" style=""><center><strong> ¿Listo para comenzar?</strong></center></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="">
                                        @if(session('notification'))
                                            <div class="alert alert-success " style="display:block;">
                                                {{ session('notification')}}
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <center>
                                            <form action="{{route('verificarCarrera',Auth::user()->id)}}" method="GET">
                                                <button type="submit" class="btn btn-success" id="iniciarCarrera" >Iniciar Carrera</button>
                                            </form>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.4.1.slim.min.js"></script>
@endsection
