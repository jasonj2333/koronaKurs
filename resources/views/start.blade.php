@extends('layouts.korona')

@section('tytul', 'Korona Gór Polski')

@section('content')
    <h1>Korona Gór Polskich</h1>
    <p>Tu zapiszesz zdobyty szczyty</p>
    <a href="{{route('szczyty.index')}}">Lista szczytów</a>
@endsection