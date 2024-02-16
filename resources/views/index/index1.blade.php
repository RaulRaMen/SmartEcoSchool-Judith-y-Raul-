@extends('layouts.index')
@yield('text',$viewData['text'])
@section('graphTitle',$viewData['graphTitle'])
@section('graph')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['gauge']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        let data = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ["{{$viewData['graph']['title']}}", {{$viewData['graph']['data']}}],
        ]);

        let options = {
            width: 1000, height: 320,
            greenFrom: 0, greenTo: 50,
            redFrom: 85, redTo: 100,
            yellowFrom:50, yellowTo: 90,
            minorTicks: 5,
            animation:{
                duration: 600,
                easing: 'inAndOut'},
        };

        let chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);
        
        
        setInterval(function() {
        data.setValue(0, 1,{{$viewData['graph']['data2']}});
        chart.draw(data, options);
        }, 5000);

        setInterval(function() {
        data.setValue(0, 1,{{$viewData['graph']['data3']}});
        chart.draw(data, options);
        }, 10000);
        /*
        setInterval(function() {
        data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
        chart.draw(data, options);
        }, 5000);
        setInterval(function() {
            data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
            chart.draw(data, options);
        }, 26000);*/
    }

</script>
<div id="chart_div"></div>
@endsection