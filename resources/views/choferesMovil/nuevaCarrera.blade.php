@extends('choferesMovil.plantilla')
@section('content')

   <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 ">
                        <table class = "table table-light ">
                            <thead>
                                <tr><th colspan="2" style="font-size: 22px; color: red;"><center>--[Nueva Carrera en curso]--</center></th></tr>
                                <tr>
                                 <td colspan="2" style="padding-left: 20px; padding-top: 0px; ">
                                    <strong style="padding-left: 30px;" >Nombre del Cliente: </strong> <strong style="color: blue;">{{$Customer->name}} {{$Customer->lastname}}</strong>
                                </td>
                                </tr>
                                <tr>
                                 <td colspan="2" style="padding-left: 20px; padding-top: 0px; ">
                                    <strong style="padding-left: 30px;" >Precio: </strong> <strong style="color: blue;">{{$Order->price}} </strong>
                                </td>
                                </tr>
                                <tr>
                                 <td colspan="2" style="padding-left: 20px; padding-top: 0px; ">
                                    <strong style="padding-left: 30px;" >Origen: </strong> <strong style="color: blue;">{{$Order->origin}}</strong>
                                </td>
                                </tr>
                                <tr>
                                <td colspan="2" style="padding-left:  20px;  padding-top: 0px; ">
                                    <strong style="padding-left: 30px;">Destino: </strong> <strong style="color: blue;">{{$Order->destination}}</strong>
                                </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" style="padding-left:  15px; width: 220px; font-size: 18px;"><strong> <center>
                                        <button class="btn btn-outline-primary">Ver Mapa de la zona</button>
                                    </center></strong></td>
                                </tr>
                                <tr>
                                    @if($Order->status == 2)
                                    <td colspan="2"  ><center><strong style="padding-right: 15px; font-size: 16px;"> Cliente en Vehiculo:</strong>
                                        <form action="{{route('enVehiculo',$Order->id)}}" method="GET">
                                           <button type="submit" class="btn btn-outline-warning" id="finalizarCarrera" style="margin-top: 15px;">Marcar</button>
                                       </form>
                                   </center></td>
                                    @else
                                    <td colspan="2"  ><center><strong style="padding-right: 15px; font-size: 16px;"> Finalizar la carrera:</strong>
                                        <form action="{{route('finalizarCarrera',$Order->id)}}" method="GET">
                                           <button type="submit" class="btn btn-outline-danger" id="finalizarCarrera" style="margin-top: 15px;">Terminar</button>
                                       </form>
                                   </center></td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.slim.min.js"></script>
@endsection