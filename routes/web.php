<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Registra las rutas de autenticación con la opción de verificación de correo electrónico
Auth::routes(['verify' => true]);

// Rutas accesibles solo por usuarios verificados
Route::middleware(['verified'])->group(function () {
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/products', ProductController::class);
});
