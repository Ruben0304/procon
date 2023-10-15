<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('comprar', function () {
    return view('comprar');
})->name('comprar');

Route::get('carrito', function () {
    return view('carrito');
})->name('carrito');

Route::get('detalles', function () {
    return view('detalles');
})->name('detalles');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
