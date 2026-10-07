<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ambiente;
use Illuminate\Support\Facades\Hash;

class AmbienteController extends Controller
{
    public function salvar_ambiente(Request $request){
        $request->validate([
            'nome' => 'required',
            'bloco' => 'required',
            'categoria' => 'required',
            'situacao' => 'required'
        ]);

        try {
            $ambiente = new Ambiente();
            $ambiente->nome = $request->input('nome');
            $ambiente->bloco = $request->input('bloco');
            $ambiente->categoria = $request->input('categoria');
            $ambiente->situacao = $request->input('situacao');

            $ambiente->save();
            return response()->json(['message' => 'Ambiente salvo com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao salvar ambiente!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }

    public function ver_ambiente(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $ambiente = Ambiente::find($request->input('id'));
        if ($ambiente) {
            return response()->json(['ambiente' => $ambiente, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Ambiente não encontrado!','erro' => 's'], 404);
        }
    }

    public function listar_ambientes(Request $request){
        $ambientes = Ambiente::all();
        return response()->json(['ambientes' => $ambientes, 'erro' => 'n'], 200);
    }

    public function listar_ambientes_simples(Request $request){
        $ambientes = Ambiente::select('nome', 'bloco')->get();
        return response()->json(['ambientes' => $ambientes, 'erro' => 'n'], 200);
    }

    public function alterar_ambiente(Request $request){
        $request->validate([
            'id' => 'required|integer',
            'nome' => 'required',
            'bloco' => 'required',
            'categoria' => 'required',
            'situacao' => 'required'
        ]);

        try {
            $ambiente = Ambiente::find($request->input('id'));
            if ($ambiente) {
                $ambiente->nome = $request->input('nome');
                $ambiente->bloco = $request->input('bloco');
                $ambiente->categoria = $request->input('categoria');
                $ambiente->situacao = $request->input('situacao');

                $ambiente->save();
                return response()->json(['message' => 'Ambiente alterado com sucesso!','erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Ambiente não encontrado!','erro' => 's'], 404);
            }
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar ambiente!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }

    public function deletar_ambiente(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);

        try {
            $ambiente = Ambiente::find($request->input('id'));
            if ($ambiente) {
                $ambiente->delete();
                return response()->json(['message' => 'Ambiente deletado com sucesso!','erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Ambiente não encontrado!','erro' => 's'], 404);
            }
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar ambiente!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }
}
