<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;

class Turma extends Model
{
    
    
    
    public function User(){
        return $this->belongsTo(User::class);
    }
}
