<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Turma extends Model
{
    
    
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    
    public function aula()
   {
        return $this->belongsToMany('App\Turma');
   }
}
