<?php

namespace SwaKuda;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome','estado'
    ];
}
