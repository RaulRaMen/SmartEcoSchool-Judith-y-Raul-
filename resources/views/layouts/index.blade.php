<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    <title>Interfaz</title>
</head>

<body>

    <header>
        <h1>SmartEcoSchool</h1>
    </header>
    
    <main>
        <div>
            @yield('text')
        </div>

        <div>
            <h1>@yield('graphTitle')</h1>
            @yield('graph')
        </div>
    </main>

    <footer>
        <img src="{{asset('/img/logoRincon.png')}}"></img>
        <h2>SmartEcoSchool</h2>
    </footer>
    
    
</body>

</html>