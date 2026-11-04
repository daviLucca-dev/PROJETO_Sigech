<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\usuario;

class funcionario extends Model
{
    protected $table = 'funcionario';

    protected $fillable = [
        'id_usuario',
        'nome',
        'funcao',
        'situacao'
    ];

    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'id_usuario');
    }
}
