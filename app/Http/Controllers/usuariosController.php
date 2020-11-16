<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function ApresntarFormulariosLogin(){
    	// apresentar o formulario de login
    	return view('usuarios_login');
    }
}
