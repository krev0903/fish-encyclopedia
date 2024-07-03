<?php

use App\Http\Controllers\FishEncyclopediaController;
use App\Models\FishEncyclopedia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('fish-encyclopedia.index');
});

Route::get('/index', [FishEncyclopediaController::class, 'index'])->name('index');
Route::get('/registration', [FishEncyclopediaController::class, 'index'])->name('fish-encyclopedia.registration');