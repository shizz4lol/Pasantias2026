<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ControladorLibro extends Controller
{
    public function index(){
        if (!Auth::check()) {
            return redirect('login');
        }
        $libros = Libro::all();
        return view('proyecto.inicio')->with('libros', $libros);
    }
    public function create(){
        if (!Auth::check()) {
            return redirect('login');
        }
        return view('proyecto.agregar');
    }
    public function store(Request $request){
        if (!Auth::check()) {
            return redirect('login');
        }
        $libro= new Libro;
        $libro->Nombre= $request->input('nombrelibro');
        $libro->Autor= $request->input('autor');
        $libro->ISBN= $request->input('isbn');
        $libro->Imagen= $request->input('img');
        $libro->save();
        return redirect('inicio');
    }
    public function edit($id){
        if (!Auth::check()) {
            return redirect('login');
        }
        $libro = Libro::find($id);
        return view('proyecto.modificar')->with('libro',$libro);
    }
    public function update(Request $request, $id){
        if (!Auth::check()) {
            return redirect('login');
        }
        $libro = Libro::find($id);
        $libro->Nombre= $request->input('nombrelibro');
        $libro->Autor= $request->input('autor');
        $libro->ISBN= $request->input('isbn');
        $libro->Imagen= $request->input('img');
        $libro->save();
        return redirect('inicio');
    }
    public function destroy($id){
        if (!Auth::check()) {
            return redirect('login');
        }
        Libro::destroy($id);
        return redirect('inicio');
    }

}