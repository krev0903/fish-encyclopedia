<?php

use App\Http\Controllers\FishEncyclopediaController;
use App\Models\FishEncyclopedia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('fish-encyclopedia.index');
})->name('home');

Route::get('/fresh', [FishEncyclopediaController::class, 'fresh'])->name('fresh');
Route::get('/see', [FishEncyclopediaController::class, 'see'])->name('see');
Route::get('/brackish', [FishEncyclopediaController::class, 'brackish'])->name('brackish');
Route::get('/registration', [FishEncyclopediaController::class, 'index'])->name('registration');
Route::get('/pro_fresh/{id}',[FishEncyclopediaController::class, 'create'])->name('pro_fresh');
Route::get('/user', [FishEncyclopediaController::class, 'user'])->name('user');
Route::get('/login', [FishEncyclopediaController::class, 'login'])->name('login');
Route::post('/post',[FishEncyclopediaController::class, 'store'])->name('store');
Route::post('/send',[FishEncyclopediaController::class, 'send'])->name('send');