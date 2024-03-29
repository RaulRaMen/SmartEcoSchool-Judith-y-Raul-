<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    <title>Electrico</title>
</head>

<body class="bodyElect">
    <header class="headerElect">
        <h1 class="tituloElect">SmartEcoSchool</h1>
    </header>

    <main class="main">
        <div class="center">
            <h1>@yield('graphTitle')</h1>
           
        </div>

        <div class="grafico2">
            @yield('graph')
           
        </div>

    </main>

    <footer class="pieElect">
        <img src="{{asset('/img/logoRincon.png')}}"></img>
        <h2>SmartEcoSchool</h2>
    </footer>

    <p class="texto2">@yield('text')</p>

</body>

</html>