<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
        public function Condominio () {
        
        return $this->belongsTo('App\Condominio');
        
    }
    
        public function Area () {
        
        return $this->belongsTo('App\Area');
        
    }
    
        public function Unidade () {
        
        return $this->belongsTo('App\Unidade');
        
    }
    
}
