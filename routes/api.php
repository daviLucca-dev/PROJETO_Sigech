<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\LoginMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AmbienteController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [UsuarioController::class, 'login']);
Route::post('/logout', [UsuarioController::class, 'logout']);

// Rotas Usuario
Route::post('/salvar_usuario', [App\Http\Controllers\UsuarioController::class, 'salvar_usuario']);
Route::get('/ver_usuario', [App\Http\Controllers\UsuarioController::class, 'ver_usuario']);
Route::get('/listar_usuarios', [App\Http\Controllers\UsuarioController::class, 'listar_usuarios']);
Route::get('/listar_usuarios_simples', [App\Http\Controllers\UsuarioController::class, 'listar_usuarios_simples']);
Route::put('/alterar_usuario', [App\Http\Controllers\UsuarioController::class, 'alterar_usuario'])->middleware(AdminMiddleware::class);
Route::delete('/deletar_usuario', [App\Http\Controllers\UsuarioController::class, 'deletar_usuario'])->middleware(AdminMiddleware::class);

// Rotas Ambiente
Route::post('/salvar_ambiente', [App\Http\Controllers\AmbienteController::class, 'salvar_ambiente']);
Route::get('/ver_ambiente', [App\Http\Controllers\AmbienteController::class, 'ver_ambiente']);
Route::get('/listar_ambientes', [App\Http\Controllers\AmbienteController::class, 'listar_ambientes']);
Route::get('/listar_ambientes_simples', [App\Http\Controllers\AmbienteController::class, 'listar_ambientes_simples']);
Route::put('/alterar_ambiente', [App\Http\Controllers\AmbienteController::class, 'alterar_ambiente'])->middleware(AdminMiddleware::class);
Route::delete('/deletar_ambiente', [App\Http\Controllers\AmbienteController::class, 'deletar_ambiente'])->middleware(AdminMiddleware::class);

// Rotas Chave
Route::post('/salvar_chave', [App\Http\Controllers\ChaveController::class, 'salvar_chave']);
Route::get('/ver_chave', [App\Http\Controllers\ChaveController::class, 'ver_chave']);
Route::get('/listar_chaves', [App\Http\Controllers\ChaveController::class, 'listar_chaves']);
Route::get('/listar_chaves_simples', [App\Http\Controllers\ChaveController::class, 'listar_chaves_simples']);
Route::put('/alterar_chave', [App\Http\Controllers\ChaveController::class, 'alterar_chave'])->middleware(AdminMiddleware::class);
Route::delete('/deletar_chave', [App\Http\Controllers\ChaveController::class, 'deletar_chave'])->middleware(AdminMiddleware::class);

// Rotas Funcionario
Route::post('/salvar_funcionario', [App\Http\Controllers\FuncionarioController::class, 'salvar_funcionario']);
Route::get('/ver_funcionario', [App\Http\Controllers\FuncionarioController::class, 'ver_funcionario']);
Route::get('/listar_funcionarios', [App\Http\Controllers\FuncionarioController::class, 'listar_funcionarios']);
Route::get('/listar_funcionarios_simples', [App\Http\Controllers\FuncionarioController::class, 'listar_funcionarios_simples']);
Route::put('/alterar_funcionario', [App\Http\Controllers\FuncionarioController::class, 'alterar_funcionario'])->middleware(AdminMiddleware::class);
Route::delete('/deletar_funcionario', [App\Http\Controllers\FuncionarioController::class, 'deletar_funcionario'])->middleware(AdminMiddleware::class);

// Rotas Movimentacao
Route::post('/salvar_movimentacao', [App\Http\Controllers\MovimentacaoController::class, 'salvar_movimentacao']);
Route::get('/ver_movimentacao', [App\Http\Controllers\MovimentacaoController::class, 'ver_movimentacao']);
Route::get('/listar_movimentacoes', [App\Http\Controllers\MovimentacaoController::class, 'listar_movimentacoes']);
Route::get('/listar_movimentacoes_simples', [App\Http\Controllers\MovimentacaoController::class, 'listar_movimentacoes_simples']);
Route::put('/alterar_movimentacao', [App\Http\Controllers\MovimentacaoController::class, 'alterar_movimentacao'])->middleware(AdminMiddleware::class);
Route::delete('/deletar_movimentacao', [App\Http\Controllers\MovimentacaoController::class, 'deletar_movimentacao'])->middleware(AdminMiddleware::class);

// Rotas Ocorrencia
Route::post('/salvar_ocorrencia', [App\Http\Controllers\OcorrenciaController::class, 'salvar_ocorrencia']);
Route::get('/ver_ocorrencia', [App\Http\Controllers\OcorrenciaController::class, 'ver_ocorrencia']);
Route::get('/listar_ocorrencias', [App\Http\Controllers\OcorrenciaController::class, 'listar_ocorrencias']);
Route::get('/listar_ocorrencias_simples', [App\Http\Controllers\OcorrenciaController::class, 'listar_ocorrencias_simples']);
Route::put('/alterar_ocorrencia', [App\Http\Controllers\OcorrenciaController::class, 'alterar_ocorrencia'])->middleware(AdminMiddleware::class);
Route::delete('/deletar_ocorrencia', [App\Http\Controllers\OcorrenciaController::class, 'deletar_ocorrencia'])->middleware(AdminMiddleware::class);