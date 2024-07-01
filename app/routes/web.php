<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('fish-encyclopedia.index');
});

Route::get('/fish-encyclopedia', [FishEncyclopediaController::class, 'index'])->name('index');