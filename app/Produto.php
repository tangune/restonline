<?php

namespace SwaKuda;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
//    protected $table = 'produtos';

    protected $fillable = [

        'nome','preco','descricao','imagem','estado','idrestaurante','idcategoria'
    ];
}
