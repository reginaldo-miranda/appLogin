<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function ApresntarFormulariosLogin(){
    	// apresentar o formulario de login
    	return view('usuarios_login');
    }

    public function FazerLogin(Request $request){
    	//	verificaçao dos inputs
        $this->validate($request,[
        	'text_usuario' =>'bail|required|min:6',
        	'text_senha' =>'required|min:6'

        ]);

    	//depois da verificacao consultar bd

    	return 'Validado';

    }
}
