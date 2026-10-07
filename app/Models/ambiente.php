<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ambiente extends Model
{
    protected $table = 'ambiente';

    protected $fillable = [
        'nome',
        'bloco',
        'categoria',
        'situacao'
    ];
}
