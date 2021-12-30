<?php

namespace App\Http\Controllers;

use App\Model\Usuario as UsuarioModel;

use Illuminate\Http\Request;

use Hash;

class Usuario extends Controller
{
    //
    public function cadastrar(){
        return view('usuario.cadastro');

    }

    public function salvar(Request $request){
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'senha' => 'required|min:5'
        ]);

        if (UsuarioModel::verificaUsuarioCadastrado($request)) {
            return view('usuario.falha');
        }

        if(UsuarioModel::cadastrar($request)){
            return view(
                'usuario.sucesso',
                ["fulano" => $request->input('nome')]
            );
        }else{
            return view('usuario.falha');
        }
    }
}
