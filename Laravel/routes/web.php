<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorWeb;
use App\Http\Controllers\ControladorLogin;
use App\Http\Controllers\ControladorLibro;

Route::get('/', [ControladorWeb::class, 'registro'])->name('registro');
Route::get('/inicio', [ControladorWeb::class, 'productos'])->name('inicio');
Route::get('/login', [ControladorLogin::class, 'login'])->name('login');
Route::post('/validar', [ControladorLogin::class, 'validar'])->name('login.validar');

Route::resource('libros', ControladorLibro::class);
?>