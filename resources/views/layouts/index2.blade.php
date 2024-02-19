<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    <title>mapa</title>
</head>

    <body>
<script type="text/javascript">

    let canvasLightning = function(c, cw, ch){

    this.init = function(){
    this.loop();
    };    
    <body class="bodyElect">
   
   


<div id="container" touch-action="none"></div>



    <header class="headerElect">
        <h1 class="tituloElect">SmartEcoSchool</h1>
    </header>

  
    <canvas id="Rayos"></canvas>
    <main class="main">
        <div class="center">
            <h1>@yield('graphTitle')</h1>
            @yield('text')
        </div>
    
        <div class="two-graphs">
        </div>

    </main>

<footer class="pieElect">
        <img src="{{asset('/img/logoRincon.png')}}"></img>
        <h2>SmartEcoSchool</h2>
    </footer>

</body>
</html>