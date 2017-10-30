<?php

namespace SwaKuda;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nome','contacto','bairro','perfil'
    ];
}
