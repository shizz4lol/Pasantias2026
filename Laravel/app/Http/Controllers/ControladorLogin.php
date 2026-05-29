<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class ControladorLogin extends Controller{
    public function login(){
        return view('Proyecto.login');
    }
    public function validar(Request $request)
    {
        $user= User::where('name', $request->name)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            return redirect('inicio');
        } else {

            return back()->with('error', 'Datos incorrectos');
        }
    }

}
