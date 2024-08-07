<?php

use App\Http\Controllers\FishEncyclopediaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\FishEncyclopedia;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/',function () {
    return view('fish-encyclopedia.index');
})->name('home');

Route::get('fresh',[FishEncyclopediaController::class,'fresh'])->name('fresh');
Route::get('sea',[FishEncyclopediaController::class,'sea'])->name('sea');
Route::get('brackish',[FishEncyclopediaController::class,'brackish'])->name('brackish');
Route::get('pro_fresh/{id}',[FishEncyclopediaController::class,'create'])->name('pro_fresh');
Route::get('showLogin',[UserController::class,'showLogin'])->name('showLogin');
Route::post('send',[UserController::class,'send'])->name('send');
Route::get('register',[RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('register',[RegisterController::class,'register'])->name('register');

Route::group(['middleware'=> ['auth']],function(){
    Route::get('user',[UserController::class,'user'])->name('user');
    Route::post('logout',[UserController::class,'logout'])->name('logout');
    Route::get('registration',[FishEncyclopediaController::class,'index'])->name('registration');
    Route::post('post',[FishEncyclopediaController::class,'store'])->name('store');
});