@extends('layouts.index1')
@section('graphTitle',$viewData['graphsTitle'])
@yield('text',$viewData['text'])

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
            width: 500,
            greenFrom: 0, greenTo: 50,
            redFrom: 85, redTo: 100,
            yellowFrom:50, yellowTo: 90,
            minorTicks: 5,max:13299000,
            min:13298000,
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
    }

</script>
<div id="chart_div"></div>
@endsection

@section('graph2')
<script type="text/javascript">
    google.charts.load('current', {'packages':['gauge']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        let data = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ["{{$viewData['graph2']['title']}}", {{$viewData['graph2']['data']}}],
        ]);

        let options = {
            width: 500,
            greenFrom: 0, greenTo: 50,
            redFrom: 85, redTo: 100,
            yellowFrom:50, yellowTo: 90,
            minorTicks: 5,max:53710000,
            min:53695000,
            animation:{
                duration: 600,
                easing: 'inAndOut'},
        };

        let chart = new google.visualization.Gauge(document.getElementById('chart_div2'));

        chart.draw(data, options);
        
        
        setInterval(function() {
        data.setValue(0, 1,{{$viewData['graph2']['data2']}});
        chart.draw(data, options);  
        }, 5000);

        setInterval(function() {
        data.setValue(0, 1,{{$viewData['graph2']['data3']}});
        chart.draw(data, options);
        }, 10000);
    }
</script>
<div id="chart_div2"></div>
@endsection