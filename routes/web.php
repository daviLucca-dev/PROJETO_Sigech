<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SplashPage;
use App\Http\Controllers\LoginPage;
use App\Http\Controllers\FuncionarioHome;
use App\Http\Controllers\RetirarChave;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/SplashPage', [SplashPage::class, 'SplashPage']);
Route::get('/LoginPage', [LoginPage::class, 'LoginPage']);
Route::get('/FuncionarioHome', [FuncionarioHome::class, 'FuncionarioHome']);
Route::get('/RetirarChave', [RetirarChave::class, 'RetirarChave']);
Route::get('/login', [LoginController::class, 'mostrarLogin']);