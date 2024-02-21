@extends('layouts.index1')
@section('graphTitle',$viewData['graphsTitle'])
@section('text',$viewData['text'])

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
        let maxg = 13299000;
        let ming = 13298000;

        function intervalo(int){
            console.log (ming + ((maxg-ming)*int));
            return ming + ((maxg-ming)*int);
        }

        let options = {
            width: 800,
            greenFrom: intervalo(0), greenTo: intervalo(0.5),
            greenColor:"#6eaa5e",
            redFrom: intervalo(0.9), redTo: intervalo(1),
            redColor:"#dd5035",
            yellowFrom:intervalo(0.5), yellowTo: intervalo(0.9),
            yellowColor:"#ff7f50",
            minorTicks: 5,max: maxg,
            min: ming,
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
<div id="chart_div">

<div id="chart_div" style="width: 900px; height: 500px;"></div>
</div>
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

        let maxg = 53710000;
        let ming = 53695000;

        function intervalo(int){
            console.log (ming + ((maxg-ming)*int));
            return ming + ((maxg-ming)*int);
        }

        let options = {
            width: 900,
            greenFrom: intervalo(0), greenTo: intervalo(0.5),
            greenColor:"#6eaa5e",
            redFrom: intervalo(0.9), redTo: intervalo(1),
            redColor:"#dd5035",
            yellowFrom:intervalo(0.5), yellowTo: intervalo(0.9),
            yellowColor:"#ff7f50",
            minorTicks: 5,max: maxg,
            min: ming,
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
<div id="chart_div2">
<div id="chart_div" style="width: 900px; height: 500px;"></div>

</div>
@endsection