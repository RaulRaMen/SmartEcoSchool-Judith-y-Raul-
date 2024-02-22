<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    <title>Electrico</title>
</head>

<body class="bodyagua2">
    <header class="headeragua2">
        <h1 class="tituloElect">SmartEcoSchool</h1>
    </header>

    <main class="main">
        <div class="center">
            <h1>@yield('graphTitle')</h1>
           
        </div>
        <div class="circulo">
            @yield('graph')
        </div>
    </main>


    <p class="texto3" > @yield('text')</p>

    <footer class="pieagua2">
        <img src="{{asset('/img/logoRincon.png')}}"></img>
        <h2>SmartEcoSchool</h2>
    </footer>

</body>

</html>