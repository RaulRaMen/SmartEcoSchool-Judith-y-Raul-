@extends('layouts.index4')
@section('graphTitle',$viewData['graphsTitle'])
@section('text',$viewData['text'])
@section('graph')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Language', 'Speakers (in millions)'],
      ["{{$viewData['data']['agua'][2][1]}}",  {{$viewData['data']['agua'][2][0]}}],
          ["{{$viewData['data']['agua'][3][1]}}",  {{$viewData['data']['agua'][3][0]}}],
          ["{{$viewData['data']['agua'][1][1]}}",  {{$viewData['data']['agua'][1][0]}}]
         
    ]);

    
    var options = {
      title: 'Consumo total',
      legend: 'none',
      backgroundColor: '#DDD',
      pieSliceText: 'label',
      slices: {  0: {offset: 0.2}

               
      },
      is3D: true,
    };


    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
  setInterval(function() {
    window.location.replace("http://localhost:8000/index/1");
    }, 14000);
</script>
<div id="piechart" style="width: 900px; height: 500px;"></div>
@endsection