<?php

use App\Http\Controllers\FishEncyclopediaController;
use App\Models\FishEncyclopedia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('fish-encyclopedia.index');
})->name('home');

Route::get('/registration', [FishEncyclopediaController::class, 'index'])->name('registration');
Route::get('/list-fresh', [FishEncyclopediaController::class, 'fresh'])->name('list_fresh');
Route::post('/post',[FishEncyclopediaController::class, 'store'])->name('store');
Route::get('/pro_fresh/{id}',[FishEncyclopediaController::class, 'create'])->name('pro_fresh');