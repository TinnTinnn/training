<?php


use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AppController::class,'login'])->name('login');

Route::post('/login',[AuthController::class,'login'])->name('auth.login');
Route::get('/logout',[AuthController::class,'logout'])->name('auth.logout');

Route::middleware(['tinn-auth'])->group(function () {
    Route::group(['prefix' => 'app'], function () {
        Route::get('home',[AppController::class,'home'])->name('app.home');
    });
});

Route::get('contact',[AppController::class,'contact'])->name('contact');
