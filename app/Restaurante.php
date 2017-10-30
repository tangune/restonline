<?php

namespace SwaKuda;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $table = 'restaurante';
    protected $fillable = [

       'nome','website','logotipo','telefone','estado','email','password','tipocozinha','bairro'
    ];
}
