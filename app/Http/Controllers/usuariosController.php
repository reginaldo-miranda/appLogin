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
    	// verifica se os dados de login estao corretos

        // vai buscar  a conta do usuario
        $dados = usuarios::where('usuario', $request->text_usuario)->first();

        $resultado = "";

        if(count($dados)==0){
            $resultado = "nao existe esta cona de usuario";
            
        }else{

            // foi encontrado o usuario
            if(Hash::check($request->text_senha, $dados->senha)){
                $resultado = "Logim com sucesso";

            }else{
                $resultado = "Login sem sucesso. (senha esta errada)";
            }
        }
    
        return($resultado);
    }

    public function InserirUsuario(){
     
     // inseir um usuario na bd
        $novo = new usuarios;
        $novo->usuario = 'Regi';
        $novo->senha = Hash::make('9876547');
        $novo->email = 'teste@testeregi.com';
        $novo->save();
        return ('usuario inserido');
    }
}
/*
 joao abc123
 carlos minhapass
 ana advinhaesta
 Regi 9876547

*/