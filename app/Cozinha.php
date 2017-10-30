<?php

namespace SwaKuda;

use Illuminate\Database\Eloquent\Model;

class Cozinha extends Model
{
    protected $fillable = [
        'nome','descricao','estado'
    ];
}
