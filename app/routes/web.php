<?php

use App\Http\Controllers\FishEncyclopediaController;
use App\Http\Controllers\UserController;
use App\Models\FishEncyclopedia;
use Illuminate\Support\Facades\Route;

Route::get('/',function () {
    return view('fish-encyclopedia.index');
})->name('home');

Route::get('fresh',[FishEncyclopediaController::class,'fresh'])->name('fresh');
Route::get('sea',[FishEncyclopediaController::class,'sea'])->name('sea');
Route::get('brackish',[FishEncyclopediaController::class,'brackish'])->name('brackish');
Route::get('pro_fresh/{id}',[FishEncyclopediaController::class,'create'])->name('pro_fresh');
Route::get('login',[UserController::class,'login'])->name('login');
Route::post('send',[UserController::class,'send'])->name('send');

Route::group(['middleware'=> ['auth']],function(){
    Route::get('user',[UserController::class,'user'])->name('user');
    Route::post('logout',[UserController::class,'logout'])->name('logout');
    Route::get('registration',[FishEncyclopediaController::class,'index'])->name('registration');
    Route::post('post',[FishEncyclopediaController::class,'store'])->name('store');
});