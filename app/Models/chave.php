<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chave extends Model
{
    protected $table = 'chave';

    protected $fillable = [
        'codigo',
        'id_ambiente',
        'situacao',
        'id_funcionario'
    ];
}
