<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function Condominio () {
        
        return $this->belongsTo('App\Condominio');
        
    }
}
