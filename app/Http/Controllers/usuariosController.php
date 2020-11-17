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
        	'text_usuario' =>'required',
        	'text_senha' =>'required'

        ]);

    	//depois da verificacao consultar bd

    	return 'Validado';

    }
}
