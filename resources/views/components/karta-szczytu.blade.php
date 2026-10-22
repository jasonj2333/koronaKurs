@props(['szczyt'])

<a class="karta" href="{{ route('szczyty.show', $szczyt['slug']) }}">
    <h2>{{ $szczyt['nazwa'] }}</h2>
    <p class="meta">
        {{ $szczyt['pasmo'] }}
        · <span class="wysokosc">{{ $szczyt['wysokosc'] }} m</span>
    </p>
    {{ $slot }}
</a>