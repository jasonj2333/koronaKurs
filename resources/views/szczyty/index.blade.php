@extends('layouts.korona')

@section('tytul', 'Szczyty Korony Gór Polskich')

@section('content')
    <p><a href="{{route('start')}}">Powrót do strony głównej</a></p>
    <h1>Szczyty Korony Gór Polskich</h1>
    @forelse ($szczyty as $szczyt)
        <x-karta-szczytu :szczyt="$szczyt" />
            
    @empty
        <p>Brak szczytów do wyświetlenia.</p>
    @endforelse  
@endsection