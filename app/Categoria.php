<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $table = 'Categorias';
    
    function produtos()
    {
        return $this->belongsToMany('App\Produto', 'produtos_categorias')
        ->withPivot('created_at');
    }
}
