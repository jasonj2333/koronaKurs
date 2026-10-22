<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tytul', 'Korona Gór Polski')</title>
    <link rel="stylesheet" href="{{ asset('css/korona.css') }}">
</head>
<body>
    <header class="pasek">
        <div class="pasek-wnetrze">
            <a class="znak" href="{{ route('start') }}">Korona Gór Polski</a>
            <nav class="menu">
                <a href="{{ route('start') }}">Start</a>
                <a href="{{ route('szczyty.index') }}">Szczyty</a>
            </nav>
        </div>
    </header>
    <main class="strona">
        @yield('content')
    </main>
</body>
</html>