<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorLogin extends Controller{
    public function login(){
        return view('Proyecto.login');
    }
}
