<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szczyty</title>
</head>
<body>
    <p><a href="{{route('start')}}">Powrót do strony głównej</a></p>
    <h1>Szczyty Korony Gór Polskich</h1>
    @forelse ($szczyty as $szczyt)
        <article>
            <h2>
                <a href="{{ route('szczyty.show', $szczyt['slug']) }}">
                    {{ $szczyt['nazwa'] }}
                </a>
            </h2>
            <p>Wysokość: {{ $szczyt['wysokosc'] }} m</p>
            <p>Lokalizacja: {{ $szczyt['pasmo'] }}</p>
        </article>
    @empty
        <p>Brak szczytów do wyświetlenia.</p>
    @endforelse  
</body>
</html>