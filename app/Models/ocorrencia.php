<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ocorrencia extends Model
{
    protected $table = 'ocorrencia';

    protected $fillable = [
        'id_chave',
        'id_funcionario',
        'data_hora_ocorrencia',
        'descricao'
    ];
}
