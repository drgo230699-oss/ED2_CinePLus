<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CineController;

Route::get('/', function () {
    return view('welcome');
});


//Ruta para el login del sistema
Route::get('/home',[
    CineController::class, 'home'
])->name('home');