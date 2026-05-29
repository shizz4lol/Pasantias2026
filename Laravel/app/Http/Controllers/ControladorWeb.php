<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorWeb extends Controller
{
    public function registro(){
        return view ('index');
    }
    public function productos(){
        return view ('Proyecto.inicio');
    }
    public function logout(){
        return view ('Proyecto.logout');
    }
}
