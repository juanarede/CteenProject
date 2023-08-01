<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\StoreController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// Rutas de registro utilizando el controlador original de Laravel UI
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/store', [StoreController::class, 'index'])->name('store');
Route::post('/agregar-al-carrito/{idProducto}', [StoreController::class, 'agregarAlCarrito'])->name('agregar.al.carrito');
Route::get('/obtener-carrito', [StoreController::class, 'obtenerCarrito'])->name('obtener.carrito');








