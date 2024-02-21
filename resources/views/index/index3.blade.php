@extends('layouts.index3')
@section('graphTitle',$viewData['graphsTitle'])
@section('text',$viewData['text'])


@section('graph')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        let data = google.visualization.arrayToDataTable([
          ['Task', 'Consumo de Agua'],
          ['Agua consumida',     7],
          ['No consumido',    7]
        ]);

        let options = {
          title: 'My Daily Activities',
          is3D: true,
          backgroundColor: "",
        };

        let chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
@endsection