<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\usuarios;

class usuariosController extends Controller
{
    public function ApresntarFormulariosLogin(){
    	// apresentar o formulario de login
    	return view('usuarios_login');
    }

    public function FazerLogin(Request $request){
    	
        $senha = Hash::make($request->text_senha);
        return($request->text_senha. ' - ' . $senha);
    

    }

    public function InserirUsuario(){
     
     // inseir um usuario na bd
        $novo = new usuarios;
        $novo->usuario = 'Ana';
        $novo->senha = Hash::make('adivinhaesta');
        $novo->email = 'teste@testeana.com';
        $novo->save();
        return ('usuario inserido');
    }
}
/*
 joao abc123
 carlos minhapass
 ana advinhaesta

*/