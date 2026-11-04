<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Usuario;

class UsuarioToken extends Model
{
    protected $table = 'usuario_token';
    
    protected $fillable = [
        'id_usuario',
        'token',
        'valido_ate'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
