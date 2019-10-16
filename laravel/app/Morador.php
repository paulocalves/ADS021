<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
        public function Condominio () {
        
        return $this->belongsTo('App\Condominio');
        
    }
    
        public function Unidade () {
        
        return $this->belongsTo('App\Unidade');
        
    }
    
}
