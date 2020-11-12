<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Request;


class usuariosController extends Controller
{
    
    public function ApresentarFormularioLogin(){
    	// apresentar o formulario de login
    	return view('usuarios_login');

    }
}
