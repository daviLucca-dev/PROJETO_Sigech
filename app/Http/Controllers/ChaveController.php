<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chave;
use Illuminate\Support\Facades\Hash;

class ChaveController extends Controller
{
    public function salvar_chave(Request $request){
        $request->validate([
            'codigo' => 'required|unique:chave,codigo',
            'id_ambiente' => 'required|integer',
            'situacao' => 'required',
            'id_funcionario' => 'nullable|integer'
        ]);

        try {
            $chave = new Chave();
            $chave->codigo = $request->input('codigo');
            $chave->id_ambiente = $request->input('id_ambiente');
            $chave->situacao = $request->input('situacao');
            $chave->id_funcionario = $request->input('id_funcionario');

            $chave->save();
            return response()->json(['message' => 'Chave salva com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao salvar chave!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }

    public function ver_chave(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $chave = Chave::find($request->input('id'));
        if ($chave) {
            return response()->json(['chave' => $chave, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Chave não encontrada!','erro' => 's'], 404);
        }
    }

    public function listar_chaves(Request $request){
        $chaves = Chave::all();
        return response()->json(['chaves' => $chaves, 'erro' => 'n'], 200);
    }

    public function listar_chaves_simples(Request $request){
        $chaves = Chave::select('codigo', 'situacao')->get();
        return response()->json(['chaves' => $chaves, 'erro' => 'n'], 200);
    }

    public function alterar_chave(Request $request){
        $request->validate([
            'id' => 'required|integer',
            'codigo' => 'required|unique:chave,codigo,'.$request->input('id'),
            'id_ambiente' => 'required|integer',
            'situacao' => 'required',
            'id_funcionario' => 'nullable|integer'
        ]);

        try {
            $chave = Chave::find($request->input('id'));
            if ($chave) {
                $chave->codigo = $request->input('codigo');
                $chave->id_ambiente = $request->input('id_ambiente');
                $chave->situacao = $request->input('situacao');
                $chave->id_funcionario = $request->input('id_funcionario');

                $chave->save();
                return response()->json(['message' => 'Chave alterada com sucesso!','erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Chave não encontrada!','erro' => 's'], 404);
            }
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar chave!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }

    public function deletar_chave(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);

        try {
            $chave = Chave::find($request->input('id'));
            if ($chave) {
                $chave->delete();
                return response()->json(['message' => 'Chave deletada com sucesso!','erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Chave não encontrada!','erro' => 's'], 404);
            }
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar chave!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }


}
