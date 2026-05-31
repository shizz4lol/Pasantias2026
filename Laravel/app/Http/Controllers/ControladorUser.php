<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ControladorUser extends Controller
{
    public function crear(Request $request){
        $user=new User;
        $user->name = $request->input('nombre');
        $user->email = $request->input('email');
        $user->password = $request->input('contraseña');
        $user->save();
        return redirect('login');
    }
}
