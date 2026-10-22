<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>{{ $szczyt['nazwa'] }}</title>
</head>
<body>
    <p><a href="{{ route('szczyty.index') }}">Wróć do listy</a></p>
    <h1>{{ $szczyt['nazwa'] }}</h1>
    <p>{{ $szczyt['pasmo'] }} · {{ $szczyt['wysokosc'] }} m n.p.m.</p>
</body>
</html>