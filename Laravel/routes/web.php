<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorLogin;
Route::get('/', 'App\Http\Controllers\ControladorWeb@registro');
Route::get('/login', [ControladorLogin::class, 'login'])
->name('login');
?>