<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    <title>Interfaz</title>
</head>

<body class="bodyagua">
    <header class="headerAgua">
        <h1 class ="tituloAgua">SmartEcoSchool</h1>
    </header>
    
    <main class="main">
        <div class="center">
            <h1>@yield('graphTitle')</h1>
           
        </div>
        <div class="circulo">
            @yield('graph')
        </div>
</div>
    </main>

    <footer>
        <img src="{{asset('/img/logoRincon.png')}}"></img>
        <h2>SmartEcoSchool</h2>
    </footer>

    <p class="texto4">  @yield('text')</p>
</body>

</html>