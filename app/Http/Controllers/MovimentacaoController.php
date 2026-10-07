<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimentacao;
use Illuminate\Support\Facades\Hash;

class MovimentacaoController extends Controller
{
    public function salvar_movimentacao(Request $request){
        $request->validate([
            'id_chave' => 'required|integer',
            'id_funcionario_retirada' => 'required|integer',
            'id_funcionario_devolucao' => 'nullable|integer',
            'data_retirada' => 'required|date',
            'hora_retirada' => 'required|date_format:H:i:s',
            'situacao' => 'required|string|max:30'
        ]);

        try {
            $movimentacao = new Movimentacao();
            $movimentacao->id_chave = $request->input('id_chave');
            $movimentacao->id_funcionario_retirada = $request->input('id_funcionario_retirada');
            $movimentacao->id_funcionario_devolucao = $request->input('id_funcionario_devolucao');
            $movimentacao->data_retirada = $request->input('data_retirada');
            $movimentacao->hora_retirada = $request->input('hora_retirada');
            $movimentacao->situacao = $request->input('situacao');

            $movimentacao->save();
            return response()->json(['message' => 'Movimentação salva com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao salvar movimentação!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }

    public function ver_movimentacao(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $movimentacao = Movimentacao::find($request->input('id'));
        if ($movimentacao) {
            return response()->json(['movimentacao' => $movimentacao, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Movimentação não encontrada!','erro' => 's'], 404);
        }
    }
    
    public function listar_movimentacoes(Request $request){
        $movimentacoes = Movimentacao::all();
        return response()->json(['movimentacoes' => $movimentacoes, 'erro' => 'n'], 200);
    }

    public function listar_movimentacoes_simples(Request $request){
        $movimentacoes = Movimentacao::select('id', 'id_chave', 'id_funcionario_retirada', 'data_retirada', 'hora_retirada', 'situacao')->get();
        return response()->json(['movimentacoes' => $movimentacoes, 'erro' => 'n'], 200);
    }

    public function alterar_movimentacao(Request $request){
        $request->validate([
            'id' => 'required|integer',
            'id_chave' => 'integer',
            'id_funcionario_retirada' => 'integer',
            'id_funcionario_devolucao' => 'nullable|integer',
            'data_retirada' => 'date',
            'hora_retirada' => 'date_format:H:i:s',
            'situacao' => 'string|max:30'
        ]);

        try {
            $movimentacao = Movimentacao::find($request->input('id'));
            if (!$movimentacao) {
                return response()->json(['message' => 'Movimentação não encontrada!','erro' => 's'], 404);
            }

            if ($request->has('id_chave')) {
                $movimentacao->id_chave = $request->input('id_chave');
            }
            if ($request->has('id_funcionario_retirada')) {
                $movimentacao->id_funcionario_retirada = $request->input('id_funcionario_retirada');
            }
            if ($request->has('data_retirada')) {
                $movimentacao->data_retirada = $request->input('data_retirada');
            }
            if ($request->has('hora_retirada')) {
                $movimentacao->hora_retirada = $request->input('hora_retirada');
            }
            if ($request->has('situacao')) {
                $movimentacao->situacao = $request->input('situacao');
            }

            $movimentacao->save();
            return response()->json(['message' => 'Movimentação alterada com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar movimentação!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }

    public function deletar_movimentacao(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);

        try {
            $movimentacao = Movimentacao::find($request->input('id'));
            if (!$movimentacao) {
                return response()->json(['message' => 'Movimentação não encontrada!','erro' => 's'], 404);
            }

            $movimentacao->delete();
            return response()->json(['message' => 'Movimentação deletada com sucesso!','erro' => 'n'], 200);
            
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar movimentação!','erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
    }
}
