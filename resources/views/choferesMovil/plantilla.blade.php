<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/paginacion.css')}}">
     <style>
        .app{
            background-color:darkgray;
            border:darkgoldenrod solid 1px;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
                font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .navbar{
            border-color: red;
            /*border-radius: 10px;*/
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            border-style: double;
            /*border-spacing: 10px;*/
            border-bottom-width: 3px;

           /*background-color: red;*/
            padding: 0px;
        }
    </style>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

</head>
<body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div style="background-color: red; border-radius: 3px;" class="container">
                <a class="navbar-brand"  href="{{ url('/') }}">
                    <strong style="color: white; padding-left: 5px;">TaxisVIP</strong>
                </a>
            </div>
        </nav>

    <div class="container-fluid">
        <div class="row">
            <div class=" container-fluid jumbotron" style="margin-left: 15px; margin-right: 15px; padding-bottom: 10px; padding-top: 10px; border-radius: 15px; padding-left: 0px; padding-right: 0px; margin-bottom: 2px; margin-top: 50px;">

                <div class="col-12 col-sm-12 ">
                    <center><h2><strong>Bienvenid@</strong> </h2></center>
                    <hr style="background-color: black;">
                </div>

                <div class="col-12 col-sm-12 ">
                    <h5><center><strong><div style="color: red;">{{$Person->name}} {{$Person->lastname}}</div></strong></center></h5>
                    <h6><strong style="color: black;">No. de Identidad: </strong> <strong style="color: blue;">{{$Person->identity}}</strong></h6>
                    <h6><strong style="color: black;">No. de Licencia: </strong> <strong style="color: blue;">{{$Driver->license}}</strong></h6>

                </div>

            </div>
        </div>
    </div>

        <main class="py-2">
            @yield('content')
        </main>
    </div>
</body>
</html>
