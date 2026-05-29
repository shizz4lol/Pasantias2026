<?php

namespace App\Http\Controllers;

use App\Models\Libro;

class ControladorLibro extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('proyecto.login')->with('libros', $libros);
    }
    public function create()
    {
        return view('proyecto.añadir');
    }
}