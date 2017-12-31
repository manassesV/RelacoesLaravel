<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Database\Seeder;
/**
 * Description of TurmaSeeder
 *
 * @author manab
 */
class TurmaSeeder extends Seeder{
    
    public function run(){
        //factory(App\Turma::class,10)->create();
        factory(App\Aula::class,10)->create();
        
    }
    
}
