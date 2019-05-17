<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    function fotos(){
        return $this->hasMany('App\Foto', 'produto_id', 'id');
    }
}
