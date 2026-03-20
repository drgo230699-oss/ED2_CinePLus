<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CineController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('productos', CineController::class);

//Ruta para el login del sistema
Route::get('/home',[
    CineController::class, 'index'
])->name('productos.home');

# Ruta para obtener la vista de la actualizazion 
Route:: get('/libros/{id}/edit',[
    CineController::class,'edit'
]) ->name('productos.edit');


//Ruta para actualizar el registro(PUT) 
Route::put('/cine/{id}', [
    CineController::class, 'update' 
])-> name('productos.update');