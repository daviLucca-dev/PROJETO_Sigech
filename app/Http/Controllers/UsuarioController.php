<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function salvar_usuario(Request $request){
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:usuario,email',
            'senha' => 'required|string|min:6',
            'perfil' => 'required',
            'situacao' => 'required'
        ]);

        try {
            $usuario = new Usuario();
            $usuario->nome = $request->input('nome');
            $usuario->email = $request->input('email');
            $usuario->senha = Hash::make($request->input('senha'));
            $usuario->perfil = $request->input('perfil');
            $usuario->situacao = $request->input('situacao');

            $usuario->save();
            return response()->json(['message' => 'Usuário salvo com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao salvar usuário!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }

    public function ver_usuario(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $usuario = Usuario::find($request->input('id'));
        if ($usuario) {
            return response()->json(['usuario' => $usuario, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Usuário não encontrado!','erro' => 's'], 404);
        }
    }

    public function listar_usuarios(Request $request){
        $usuarios = Usuario::all();
        return response()->json(['usuarios' => $usuarios, 'erro' => 'n'], 200);
    }

    public function listar_usuarios_simples(Request $request){
        $usuarios = Usuario::select('nome', 'email')->get();
        return response()->json(['usuarios' => $usuarios, 'erro' => 'n'], 200);
    }

    public function alterar_usuario(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:usuario,id',
            'nome' => 'required',
            'email' => 'required|email',
            'senha' => 'required|string|min:6',
            'perfil' => 'required',
            'situacao' => 'required'
        ]);

        try {
            $usuario = Usuario::find($request->input('id'));
            if ($usuario_email_igual = Usuario::where('email', $request->input('email'))->where('id', '!=', $request->input('id'))->first()) {
                return response()->json(['message' => 'O email informado já está em uso por outro usuário!','erro' => 's'], 200);
            }
            $usuario->nome = $request->input('nome');
            $usuario->email = $request->input('email');
            $usuario->senha = Hash::make($request->input('senha'));
            $usuario->perfil = $request->input('perfil');
            $usuario->situacao = $request->input('situacao');

            $usuario->save();
            return response()->json(['message' => 'Usuário alterado com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar usuário!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }

    public function deletar_usuario(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:usuario,id',
        ]);

        try {
            $usuario = Usuario::find($request->input('id'));
            $usuario->delete();
            return response()->json(['message' => 'Usuário deletado com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar usuário!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }
}
