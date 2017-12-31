<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = "aula";
    protected $fillable = ['nome','data'];    
    protected $hidden = ['id','turma_id'];
    protected $visible = ['nome','data'];
    
    public function turma()
    {
        $this->belongsToMany('App\Turma');
    }
}
