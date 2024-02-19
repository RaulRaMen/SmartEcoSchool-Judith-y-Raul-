@extends('layouts.index2')
@section('graphTitle',$viewData['graphsTitle'])
@yield('text',$viewData['text'])

@section('graph')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['scatter']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart () {

        var data = new google.visualization.DataTable();
        data.addColumn('number', 'Hours Studied');
        data.addColumn('number', 'Final');

        data.addRows([
          [0, 67], [1, 88], [2, 77],
          [3, 93], [4, 85], [5, 91],
          [6, 71], [7, 78], [8, 93],
          [9, 80], [10, 82],[0, 75],
          [5, 80], [3, 90], [1, 72],
          [5, 75], [6, 68], [7, 98],
          [3, 82], [9, 94], [2, 79],
          [2, 95], [2, 86], [3, 67],
          [4, 60], [2, 80], [6, 92],
          [2, 81], [8, 79], [9, 83],
          [3, 75], [1, 80], [3, 71],
          [3, 89], [4, 92], [5, 85],
          [6, 92], [7, 78], [6, 95],
          [3, 81], [0, 64], [4, 85],
          [2, 83], [3, 96], [4, 77],
          [5, 89], [4, 89], [7, 84],
          [4, 92], [9, 98]
        ]);

        var options = {
          width: 800,
          height: 500,
          chart: {
            title: 'Students\' Final Grades',
            subtitle: 'based on hours studied'
          },
          hAxis: {title: 'Hours Studied'},
          vAxis: {title: 'Grade'}
        };

        var chart = new google.charts.Scatter(document.getElementById('scatterchart_material'));

        chart.draw(data, google.charts.Scatter.convertOptions(options));
      }
    </script>
<div id="scatterchart_material" style="width: 900px; height: 500px;"></div>
@endsection