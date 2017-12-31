<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Description of 2017_12_30_130616_create_aulas_turmas_table
 *
 * @author manab
 */
class CreateAulasTurmasTable extends Migration {
    
    public function up(){
        Schema::create('aulas_turma', function (Blueprint $table){
            $table->integer('aula_id')->unsigned();
            $table->foreign('aula_id')->references('aulas')->on('id')->onDelete('cascade');
            $table->integer('turma_id')->unsigned(); 
            $table->foreign('turma_id')->references('turmas')->on('id')->onDelete('cascade');
        });
    }
    
    
    public function down(){
        Schema::dropIfExists('aulas_turmas');
    }
    
}