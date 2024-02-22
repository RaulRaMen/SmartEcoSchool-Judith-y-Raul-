@extends('layouts.index3')
@section('graphTitle',$viewData['graphsTitle'])
@section('text',$viewData['text'])


@section('graph')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Fecha', 'Gasto'],
          ["{{$viewData['data']['electricidad'][2][1]}}",  {{$viewData['data']['electricidad'][2][0]}}],
          ["{{$viewData['data']['electricidad'][3][1]}}",  {{$viewData['data']['electricidad'][3][0]}}],
          ["{{$viewData['data']['electricidad'][4][1]}}", {{$viewData['data']['electricidad'][4][0]}}]
        ]);

        
        var options = {
          title: 'Gasto agua Mensual',
          pointSize: 10,
          curveType: 'function',
          legend: { position: 'bottom' },
          animation:{duration: 2,
                    startup: true},
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    </script>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
@endsection