<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model {

    protected $table = "aulas";
    protected $fillable = ['nome', 'data'];
    protected $hidden = ['id'];
    protected $visible = ['nome', 'data'];

    public function turma() {
        $this->belongsToMany('App\Turma');
    }
    
    
    
    public function getDataAttribute($values){
        return datas($values);
    }

}
