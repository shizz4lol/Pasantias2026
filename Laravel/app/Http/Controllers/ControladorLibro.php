<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Libro;

class ControladorLibro extends Controller
{
    public function index(){
        $libros = Libro::all();
        return view('proyecto.login')->with('libros', $libros);
    }
    public function crear(){
        return view('proyecto.añadir');
    }
    public function guardar(Request $request){
        $libro= new Libro;
        $libro->Nombre= $request->input('nombre');
        $libro->Autor= $request->input('autor');
        $libro->ISBN= $request->input('isbn');
        $libro->save();
        return redirect('inicio');
    }
    public function editar($id){
        $libro = Libro::find($id);
        return view('proyecto.modificar')->with('libro',$libro);
    }
    public function modificar (Request $request, $id){
        $libro->Nombre= $request->input('nombre');
        $libro->Autor= $request->input('autor');
        $libro->ISBN= $request->input('isbn');
        $libro->save();
    }
    public function eliminar($id){
        Libro::destroy($id);
        return redirect('inicio');
    }

}