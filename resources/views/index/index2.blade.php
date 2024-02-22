@extends('layouts.index2')
@section('graphTitle',$viewData['graphsTitle'])
@section('text',$viewData['text'])

@section('graph')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['scatter']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart () {

        let data = new google.visualization.DataTable();
        data.addColumn('number', 'Hours Studied');
        //data.addColumn('timeofday', 'Hours Studied');
        data.addColumn('number', 'Final');

        data.addRows([
          [{{$viewData['graph']['data'][0][0]}},{{$viewData['graph']['data'][0][1]}}],[{{$viewData['graph']['data'][1][0]}},{{$viewData['graph']['data'][1][1]}}],[{{$viewData['graph']['data'][2][0]}},{{$viewData['graph']['data'][2][1]}}],
          [{{$viewData['graph']['data'][3][0]}},{{$viewData['graph']['data'][3][1]}}],[{{$viewData['graph']['data'][4][0]}},{{$viewData['graph']['data'][4][1]}}],[{{$viewData['graph']['data'][5][0]}},{{$viewData['graph']['data'][5][1]}}],
          [{{$viewData['graph']['data'][6][0]}},{{$viewData['graph']['data'][6][1]}}],[{{$viewData['graph']['data'][7][0]}},{{$viewData['graph']['data'][7][1]}}],[{{$viewData['graph']['data'][8][0]}},{{$viewData['graph']['data'][8][1]}}],
          [{{$viewData['graph']['data'][9][0]}},{{$viewData['graph']['data'][9][1]}}],[{{$viewData['graph']['data'][10][0]}},{{$viewData['graph']['data'][10][1]}}],[{{$viewData['graph']['data'][11][0]}},{{$viewData['graph']['data'][11][1]}}],
          [{{$viewData['graph']['data'][12][0]}},{{$viewData['graph']['data'][12][1]}}],[{{$viewData['graph']['data'][13][0]}},{{$viewData['graph']['data'][13][1]}}],[{{$viewData['graph']['data'][14][0]}},{{$viewData['graph']['data'][14][1]}}],
          [{{$viewData['graph']['data'][15][0]}},{{$viewData['graph']['data'][15][1]}}],[{{$viewData['graph']['data'][16][0]}},{{$viewData['graph']['data'][16][1]}}],[{{$viewData['graph']['data'][17][0]}},{{$viewData['graph']['data'][17][1]}}],
          [{{$viewData['graph']['data'][18][0]}},{{$viewData['graph']['data'][18][1]}}],[{{$viewData['graph']['data'][19][0]}},{{$viewData['graph']['data'][19][1]}}],[{{$viewData['graph']['data'][20][0]}},{{$viewData['graph']['data'][20][1]}}],
          [{{$viewData['graph']['data'][21][0]}},{{$viewData['graph']['data'][21][1]}}],[{{$viewData['graph']['data'][22][0]}},{{$viewData['graph']['data'][22][1]}}],[{{$viewData['graph']['data'][23][0]}},{{$viewData['graph']['data'][23][1]}}],
          [{{$viewData['graph']['data'][24][0]}},{{$viewData['graph']['data'][24][1]}}],[{{$viewData['graph']['data'][25][0]}},{{$viewData['graph']['data'][25][1]}}],[{{$viewData['graph']['data'][26][0]}},{{$viewData['graph']['data'][26][1]}}],
          [{{$viewData['graph']['data'][27][0]}},{{$viewData['graph']['data'][27][1]}}],[{{$viewData['graph']['data'][28][0]}},{{$viewData['graph']['data'][28][1]}}],[{{$viewData['graph']['data'][29][0]}},{{$viewData['graph']['data'][29][1]}}],
          [{{$viewData['graph']['data'][30][0]}},{{$viewData['graph']['data'][30][1]}}],[{{$viewData['graph']['data'][31][0]}},{{$viewData['graph']['data'][31][1]}}],[{{$viewData['graph']['data'][32][0]}},{{$viewData['graph']['data'][32][1]}}],
          [{{$viewData['graph']['data'][33][0]}},{{$viewData['graph']['data'][33][1]}}],[{{$viewData['graph']['data'][34][0]}},{{$viewData['graph']['data'][34][1]}}],[{{$viewData['graph']['data'][35][0]}},{{$viewData['graph']['data'][35][1]}}],
          [{{$viewData['graph']['data'][36][0]}},{{$viewData['graph']['data'][36][1]}}],[{{$viewData['graph']['data'][37][0]}},{{$viewData['graph']['data'][37][1]}}],[{{$viewData['graph']['data'][38][0]}},{{$viewData['graph']['data'][38][1]}}],
          [{{$viewData['graph']['data'][39][0]}},{{$viewData['graph']['data'][39][1]}}],[{{$viewData['graph']['data'][40][0]}},{{$viewData['graph']['data'][40][1]}}],[{{$viewData['graph']['data'][41][0]}},{{$viewData['graph']['data'][41][1]}}],
          [{{$viewData['graph']['data'][42][0]}},{{$viewData['graph']['data'][42][1]}}],[{{$viewData['graph']['data'][43][0]}},{{$viewData['graph']['data'][43][1]}}],[{{$viewData['graph']['data'][44][0]}},{{$viewData['graph']['data'][44][1]}}],
          [{{$viewData['graph']['data'][45][0]}},{{$viewData['graph']['data'][45][1]}}],[{{$viewData['graph']['data'][46][0]}},{{$viewData['graph']['data'][46][1]}}],[{{$viewData['graph']['data'][47][0]}},{{$viewData['graph']['data'][47][1]}}],
          [{{$viewData['graph']['data'][48][0]}},{{$viewData['graph']['data'][48][1]}}],[{{$viewData['graph']['data'][49][0]}},{{$viewData['graph']['data'][49][1]}}],[{{$viewData['graph']['data'][50][0]}},{{$viewData['graph']['data'][50][1]}}],
          
          [{{$viewData['graph']['data'][51][0]}},{{$viewData['graph']['data'][51][1]}}],[{{$viewData['graph']['data'][52][0]}},{{$viewData['graph']['data'][52][1]}}],[{{$viewData['graph']['data'][53][0]}},{{$viewData['graph']['data'][53][1]}}],
          [{{$viewData['graph']['data'][54][0]}},{{$viewData['graph']['data'][54][1]}}],[{{$viewData['graph']['data'][55][0]}},{{$viewData['graph']['data'][55][1]}}],[{{$viewData['graph']['data'][56][0]}},{{$viewData['graph']['data'][56][1]}}],
          [{{$viewData['graph']['data'][57][0]}},{{$viewData['graph']['data'][57][1]}}],[{{$viewData['graph']['data'][58][0]}},{{$viewData['graph']['data'][58][1]}}],[{{$viewData['graph']['data'][59][0]}},{{$viewData['graph']['data'][59][1]}}],
          [{{$viewData['graph']['data'][60][0]}},{{$viewData['graph']['data'][60][1]}}],[{{$viewData['graph']['data'][61][0]}},{{$viewData['graph']['data'][61][1]}}],[{{$viewData['graph']['data'][62][0]}},{{$viewData['graph']['data'][62][1]}}],
          [{{$viewData['graph']['data'][63][0]}},{{$viewData['graph']['data'][63][1]}}],[{{$viewData['graph']['data'][64][0]}},{{$viewData['graph']['data'][64][1]}}],[{{$viewData['graph']['data'][65][0]}},{{$viewData['graph']['data'][65][1]}}],
          [{{$viewData['graph']['data'][66][0]}},{{$viewData['graph']['data'][66][1]}}],[{{$viewData['graph']['data'][67][0]}},{{$viewData['graph']['data'][67][1]}}],[{{$viewData['graph']['data'][68][0]}},{{$viewData['graph']['data'][68][1]}}],
          [{{$viewData['graph']['data'][69][0]}},{{$viewData['graph']['data'][69][1]}}],[{{$viewData['graph']['data'][70][0]}},{{$viewData['graph']['data'][70][1]}}],[{{$viewData['graph']['data'][71][0]}},{{$viewData['graph']['data'][71][1]}}],
          [{{$viewData['graph']['data'][72][0]}},{{$viewData['graph']['data'][72][1]}}],[{{$viewData['graph']['data'][73][0]}},{{$viewData['graph']['data'][73][1]}}],[{{$viewData['graph']['data'][74][0]}},{{$viewData['graph']['data'][74][1]}}],
          [{{$viewData['graph']['data'][75][0]}},{{$viewData['graph']['data'][75][1]}}],[{{$viewData['graph']['data'][76][0]}},{{$viewData['graph']['data'][76][1]}}],[{{$viewData['graph']['data'][77][0]}},{{$viewData['graph']['data'][77][1]}}],
          [{{$viewData['graph']['data'][78][0]}},{{$viewData['graph']['data'][78][1]}}],[{{$viewData['graph']['data'][79][0]}},{{$viewData['graph']['data'][79][1]}}],[{{$viewData['graph']['data'][80][0]}},{{$viewData['graph']['data'][80][1]}}],
          [{{$viewData['graph']['data'][81][0]}},{{$viewData['graph']['data'][81][1]}}],[{{$viewData['graph']['data'][82][0]}},{{$viewData['graph']['data'][82][1]}}],[{{$viewData['graph']['data'][83][0]}},{{$viewData['graph']['data'][83][1]}}],
          [{{$viewData['graph']['data'][84][0]}},{{$viewData['graph']['data'][84][1]}}],[{{$viewData['graph']['data'][85][0]}},{{$viewData['graph']['data'][85][1]}}],[{{$viewData['graph']['data'][86][0]}},{{$viewData['graph']['data'][86][1]}}],
          [{{$viewData['graph']['data'][87][0]}},{{$viewData['graph']['data'][87][1]}}],[{{$viewData['graph']['data'][88][0]}},{{$viewData['graph']['data'][88][1]}}],[{{$viewData['graph']['data'][89][0]}},{{$viewData['graph']['data'][89][1]}}],
          [{{$viewData['graph']['data'][90][0]}},{{$viewData['graph']['data'][90][1]}}],[{{$viewData['graph']['data'][91][0]}},{{$viewData['graph']['data'][91][1]}}],[{{$viewData['graph']['data'][92][0]}},{{$viewData['graph']['data'][92][1]}}],
          [{{$viewData['graph']['data'][93][0]}},{{$viewData['graph']['data'][93][1]}}],[{{$viewData['graph']['data'][94][0]}},{{$viewData['graph']['data'][94][1]}}],[{{$viewData['graph']['data'][95][0]}},{{$viewData['graph']['data'][95][1]}}],
          [{{$viewData['graph']['data'][96][0]}},{{$viewData['graph']['data'][96][1]}}],[{{$viewData['graph']['data'][97][0]}},{{$viewData['graph']['data'][97][1]}}],[{{$viewData['graph']['data'][98][0]}},{{$viewData['graph']['data'][98][1]}}],
          [{{$viewData['graph']['data'][99][0]}},{{$viewData['graph']['data'][99][1]}}],[{{$viewData['graph']['data'][100][0]}},{{$viewData['graph']['data'][100][1]}}],[{{$viewData['graph']['data'][101][0]}},{{$viewData['graph']['data'][101][1]}}]
        ]);


        let options = {
  width: 1200,
  height: 600,
  backgroundColor: 'transparent', // Fondo transparente
  chart: {
    title: 'Gráfica de Voltaje Mensual',
    subtitle: 'El Rincón',
    titleTextStyle: {
      color: '#333',
      fontSize: 24,
      bold: true
    },
    subtitleTextStyle: {
      color: '#666',
      fontSize: 18
    }
  },
  vAxis: {
    title: 'Voltaje',
    titleTextStyle: {
      color: '#333',
      fontSize: 18,
      bold: true
    },
    gridlines: {
      color: '#ccc'
    },
    minValue: 0,
    format: 'V' // Formato de números en el eje vertical
  },
  hAxis: {
    title: 'Mes',
    titleTextStyle: {
      color: '#333',
      fontSize: 18,
      bold: true,
      
    },
    textStyle: {
      color: '#666'
    }
  },
  legend: {
    position: 'none' // No mostrar leyenda
  },
  colors: ['#4285F4'], // Color de la línea del gráfico
  lineWidth: 2, // Grosor de la línea del gráfico
  curveType: 'function' // Tipo de curva (opciones: 'none', 'function', 'linear', 'polynomial', 'exponential')
};




        let chart = new google.charts.Scatter(document.getElementById('scatterchart_material'));

        chart.draw(data, google.charts.Scatter.convertOptions(options));
      }
    </script>
<div id="scatterchart_material" style="width: 900px; height: 500px;"></div>
@endsection