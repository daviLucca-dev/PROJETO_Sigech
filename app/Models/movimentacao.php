<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class movimentacao extends Model
{
    protected $table = 'movimentacao';

    protected $fillable = [
        'id_chave',
        'id_funcionario',
        'data_hora_retirada',
        'data_hora_devolucao'
    ];
}
