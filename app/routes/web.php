<?php

use App\Http\Controllers\FishEncyclopediaController;
use App\Models\FishEncyclopedia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('fish-encyclopedia.index');
});


Route::get('/index', [FishEncyclopediaController::class, 'index'])->name('index');
Route::get('/registration', [FishEncyclopediaController::class, 'index'])->name('registration');
Route::get('/list-fresh', [FishEncyclopediaController::class, 'fresh'])->name('list-fresh');
// Route::get('/list-fresh', [FishEncyclopediaController::class, 'index'])->name('list-fresh');
Route::post('/post',[FishEncyclopediaController::class, 'store'])->name('store');