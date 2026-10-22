<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('start');
})->name('start');

Route::get('/szczyty', function () {
    //To normalnie dane powinny być pobierane z bazy danych przy użyciu modelu i kontrolera, ale na potrzeby tego zadania stworzymy tablicę z danymi wprost w kodzie.
    $szczyty = [
        ['nazwa' => 'Rysy', 'pasmo' => 'Tatry', 'wysokosc' => 2499],
        ['nazwa' => 'Babia Góra', 'pasmo' => 'Beskidy', 'wysokosc' => 1725],
        ['nazwa' => 'Śnieżka', 'pasmo' => 'Karkonosze', 'wysokosc' => 1603],
        ['nazwa' => 'Śnieżnik', 'pasmo' => 'Masyw Śnieżnika', 'wysokosc' => 1425],
    ];
    return view('szczyty.index', [
        'szczyty' => $szczyty,
    ]);
})->name('szczyty.index');
