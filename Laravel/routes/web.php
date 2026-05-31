<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorWeb;
use App\Http\Controllers\ControladorLogin;
use App\Http\Controllers\ControladorLibro;
use App\Http\Controllers\ControladorUser;

Route::get('/', [ControladorWeb::class, 'registro'])->name('registro');
Route::get('/login', [ControladorLogin::class, 'login'])->name('login');
Route::post('/logout', [ControladorLogin::class, 'logout'])->name('logout');
Route::get('/logout', [ControladorWeb::class, 'logoutvista'])->name('logoutvista');
Route::post('/validar', [ControladorLogin::class, 'validar'])->name('login.validar');

Route::post('/registro', [ControladorUser::class, 'crear'])->name('user.crear');

Route::resource('libros', ControladorLibro::class);
Route::get('/inicio', [ControladorLibro::class, 'index'])->name('inicio');
?>