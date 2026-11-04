<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Hash;
use App\Models\UsuarioToken;

class FuncionarioController extends Controller
{
    public function salvar_funcionario(Request $request){
        $request->validate([
            'id_usuario' => 'required|integer',
            'nome' => 'required|string|max:100',
            'funcao' => 'required|string|max:100',
            'situacao' => 'required|string|max:20'
        ]);

        try {
            $funcionario = new Funcionario();
            $funcionario->id_usuario = $request->input('id_usuario');
            $funcionario->nome = $request->input('nome');
            $funcionario->funcao = $request->input('funcao');
            $funcionario->situacao = $request->input('situacao');

            $funcionario->save();
            return response()->json(['message' => 'Funcionário salvo com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao salvar funcionário!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }

    public function ver_funcionario(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $funcionario = Funcionario::find($request->input('id'));
        if ($funcionario) {
            return response()->json(['funcionario' => $funcionario, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Funcionário não encontrado!','erro' => 's'], 404);
        }
    }

    public function listar_funcionarios(Request $request){
        $funcionarios = Funcionario::all();
        return response()->json(['funcionarios' => $funcionarios, 'erro' => 'n'], 200);
    }

    public function listar_funcionarios_simples(Request $request){
        $funcionarios = Funcionario::select('nome', 'funcao', 'situacao')->get();
        return response()->json(['funcionarios' => $funcionarios, 'erro' => 'n'], 200);
    }

    public function alterar_funcionario(Request $request){
        $request->validate([
            'id' => 'required|integer',
            'id_usuario' => 'required|integer',
            'nome' => 'required|string|max:100',
            'funcao' => 'required|string|max:100',
            'situacao' => 'required|string|max:20'
        ]);

        try {
            $funcionario = Funcionario::find($request->input('id'));
            if ($funcionario) {
                $funcionario->id_usuario = $request->input('id_usuario');
                $funcionario->nome = $request->input('nome');
                $funcionario->funcao = $request->input('funcao');
                $funcionario->situacao = $request->input('situacao');

                $funcionario->save();
                return response()->json(['message' => 'Funcionário alterado com sucesso!','erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Funcionário não encontrado!','erro' => 's'], 404);
            }
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar funcionário!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }

    public function deletar_funcionario(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);

        try {
            $funcionario = Funcionario::find($request->input('id'));
            if ($funcionario) {
                $funcionario->delete();
                return response()->json(['message' => 'Funcionário deletado com sucesso!','erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Funcionário não encontrado!','erro' => 's'], 404);
            }
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar funcionário!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }
    
    
}
