<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    
    public function Condominio () {
        
        return $this->belongsTo('App\Condominio');
        
    }
    
    
}
