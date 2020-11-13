<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    
    public function ApresentarFormularioLogin(){
    	// apresentar o formulario de login
    	return view('usuario_login');

    }
}
