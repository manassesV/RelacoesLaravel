<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model 
{

    protected $hidden = ['id', 'user_turma'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function aula()
    {
        return $this->belongsToMany('App\Turma');
    }

    public function getDataInicioAttribute($values) 
    {
       
        return datas($values);
    }

    public function getDataFimAttribute($values) 
    {
  
        return datas($values);
    }

}
