<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CineController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    
    Route::resource('productos', CineController::class);
});




# Ruta para obtener la vista de la actualizazion 
Route:: get('/productos/{id}/edit',[
    CineController::class,'edit'
]) ->name('productos.edit');


//Ruta para actualizar el registro(PUT) 

Route::put('/productos/{id}', [
    CineController::class, 'update' 
])-> name('productos.update');

//Ruta para regresar la vista del registro
Route:: get('/registro',[
    AuthController:: class, 'registerForm'

])->name('registro');//El metodo de html depende de su funcion "GET" funciona para mostrar 

#Ruta para guardar el registro de ususario 
Route::post('/registro', [
    AuthController::class, 'register'

])-> name('registro.store');

//Ruta para regresar la vista del inicio de sesion 
Route::get('/acceso', [
    AuthController::class, 'loginForm'
])->name('acceso');

//Ruta para iniciar sesion 
Route::post('/acceso', [
    AuthController::class, 'login'
])->name('acceso.store');


//Ruta para cerrar sesion 

Route::post('/cerrar',[
    AuthController::class,'logout'
])->name('cerrar');



Route::middleware(['auth','admin'])-> group (function () {
    //Ruta para el panel del administrador
    Route::get('/admin-dashboard', [
        AuthController::class, 'adminDashboard'
    ])->name('admin-dashboard');

});