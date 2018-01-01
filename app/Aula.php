<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model {

    protected $table = "aulas";
    protected $fillable = ['nome', 'data'];
    protected $hidden = ['id'];
    protected $visible = ['nome', 'data','status'];
    protected $guarded = ['id'];
    
    protected $casts = [
               'nome' => 'string',
               'data' => 'date',
               'status' => 'boolean'
    ];
     
    protected $appends  =
                       [
                'status'
            ];

    public function turma() {
        return $this->belongsToMany('App\Turma')
                    ->withPivot('status')
                    ->wherePivot('status',true);
    }
    
    
    
    public function getDataAttribute($values){
        return datas($values);
    }
    
    public function getStatusAttribute(){
        return true;
    }

}
