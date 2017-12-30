<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->boolean('status');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->integer('user_turma')->unsigned();
            $table->foreign('user_turma')->references('turmas')->on('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('turmas');
    }

}
