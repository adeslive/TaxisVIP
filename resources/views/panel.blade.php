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
                    @if($driver->status == 1)
                    <div class="col-sm-2 p-2 justify-content-center">
                        @if ($driver->photo == null)
                            <i class="fas fa-user fa-3x" style="margin:auto" data-toggle="popover" data-placement="bottom"
                            title="{{ $driver->person->name . ' ' . $driver->person->lastname }}"
                            data-trigger="click"
                            data-html="true"
                            data-content="<a class='btn btn-warning' href='{{ route('inactivar', $driver->id) }}' type='button'> Desactivar </a> <a class='btn btn-success' href='{{ route('carrera', $driver->id) }}' type='button'> Carrera </a>"></i>
                        @else
                            <img width="45" src="{{ asset('storage') . '/' . $driver->photo }}" style="margin:auto" data-toggle="popover" data-placement="bottom"
                                title="{{ $driver->person->name . ' ' . $driver->person->lastname }}"
                                data-trigger="click"
                                data-html="true"
                                data-content="<a class='btn btn-warning' href='{{ route('inactivar', $driver->id) }}' type='button'> Desactivar </a> <a class='btn btn-success' href='{{ route('carrera', $driver->id) }}' type='button'> Carrera </a>">
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
                    @if($driver->status == 1 && $driver->career_status == 1)
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
</div>
<div class="row">
    <div class="col">
        <div id="chart_div"></div>
    </div>
</div>
@endsection

@section('foot')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
            ['Chofer', 'Ventas', 'Multas'],
            @foreach($drivers as $driver)
                @php($sum = 0)
                @foreach($driver->orders as $order)
                    @php($sum += $order->price)
                @endforeach
            ['{{ $driver->person->name }}', {{ $sum }}, 0],
            @endforeach
        ]);

        var materialOptions = {
          width: '100%',
          chart: {
            title: 'Ventas por chofer'
          },
          series: {
            0: { axis: 'ventas' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'multas' } // Bind series 1 to an axis named 'brightness'.
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
          button.innerText = 'Change to Classic';
          button.onclick = drawClassicChart;
        }

        function drawClassicChart() {
          var classicChart = new google.visualization.ColumnChart(chartDiv);
          classicChart.draw(data, classicOptions);
          button.innerText = 'Change to Material';
          button.onclick = drawMaterialChart;
        }

        drawMaterialChart();
    };
    </script>
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