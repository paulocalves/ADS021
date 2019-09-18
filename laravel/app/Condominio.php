<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
     public function Unidade () {
        
        return $this->hasMany('App\Unidade');
        
    }
    
    public function Area () {
        
        return $this->hasMany('App\Area');
        
    }
    
     public function Reserva () {
        
        return $this->hasMany('App\Reserva');
        
    }
    
    public function Visitantes () {
        
        return $this->hasMany('App\Visitante');
        
    }
    
    
    public function Morador () {
        
        return $this->hasMany('App\Visitante');
        
    }  
    
}
