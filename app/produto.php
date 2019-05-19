<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $table = 'Produtos';
    
    function fotos()
    {
        return $this->hasMany('App\Foto', 'produto_id', 'id');
    }

    function categorias()
    {
        return $this->belongsToMany('App\Categoria', 'produtos_categorias')
        ->withPivot('created_at');
    }
}
