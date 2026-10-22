@extends('layouts.korona')

@section('tytul')
    {{ $szczyt['nazwa'] }}
@endsection

@section('content')
    <p><a href="{{ route('szczyty.index') }}">Wróć do listy</a></p>
    <h1>{{ $szczyt['nazwa'] }}</h1>
    <p>{{ $szczyt['pasmo'] }} · {{ $szczyt['wysokosc'] }} m n.p.m.</p>
@endsection
