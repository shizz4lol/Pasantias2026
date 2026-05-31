<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorWeb extends Controller
{
    public function registro(){
        return view ('index');
    }
    public function logoutvista(){
        return view ('Proyecto.logout');
    }
}
