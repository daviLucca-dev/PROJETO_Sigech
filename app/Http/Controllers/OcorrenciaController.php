<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocorrencia;
use Illuminate\Support\Facades\Hash;

class OcorrenciaController extends Controller
{
    public function salvar_ocorrencia(Request $request){
        $request->validate([
            'id_movimentacao' => 'required|integer',
            'tipo' => 'required|string|max:50',
            'descricao' => 'required|string',
            'data_ocorrencia' => 'required|date',
            'situacao' => 'required|string|max:30'
        ]);

        try {
            $ocorrencia = new Ocorrencia();
            $ocorrencia->id_movimentacao = $request->input('id_movimentacao');
            $ocorrencia->tipo = $request->input('tipo');
            $ocorrencia->descricao = $request->input('descricao');
            $ocorrencia->data_ocorrencia = $request->input('data_ocorrencia');
            $ocorrencia->situacao = $request->input('situacao');

            $ocorrencia->save();
            return response()->json(['message' => 'Ocorrência salva com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao salvar ocorrência!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }

    public function ver_ocorrencia(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $ocorrencia = Ocorrencia::find($request->input('id'));
        if ($ocorrencia) {
            return response()->json(['ocorrencia' => $ocorrencia, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Ocorrência não encontrada!','erro' => 's'], 404);
        }
    }

    public function listar_ocorrencias(Request $request){
        $ocorrencias = Ocorrencia::all();
        return response()->json(['ocorrencias' => $ocorrencias, 'erro' => 'n'], 200);
    }

    public function listar_ocorrencias_simples(Request $request){
        $ocorrencias = Ocorrencia::select('id', 'tipo', 'data_ocorrencia')->get();
        return response()->json(['ocorrencias' => $ocorrencias, 'erro' => 'n'], 200);
    }
    
    public function alterar_ocorrencia(Request $request){
        $request->validate([
            'id' => 'required|integer',
            'id_movimentacao' => 'required|integer',
            'tipo' => 'required|string|max:50',
            'descricao' => 'required|string',
            'data_ocorrencia' => 'required|date',
            'situacao' => 'required|string|max:30'
        ]);

        try {
            $ocorrencia = Ocorrencia::find($request->input('id'));
            if ($ocorrencia) {
                $ocorrencia->id_movimentacao = $request->input('id_movimentacao');
                $ocorrencia->tipo = $request->input('tipo');
                $ocorrencia->descricao = $request->input('descricao');
                $ocorrencia->data_ocorrencia = $request->input('data_ocorrencia');
                $ocorrencia->situacao = $request->input('situacao');

                $ocorrencia->save();
                return response()->json(['message' => 'Ocorrência alterada com sucesso!','erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Ocorrência não encontrada!','erro' => 's'], 404);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar ocorrência!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function deletar_ocorrencia(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);

        try {
            $ocorrencia = Ocorrencia::find($request->input('id'));
            if ($ocorrencia) {
                $ocorrencia->delete();
                return response()->json(['message' => 'Ocorrência deletada com sucesso!','erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Ocorrência não encontrada!','erro' => 's'], 404);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar ocorrência!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
}
