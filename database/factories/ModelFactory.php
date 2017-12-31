<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Turma::class, function (Faker\Generator $faker){
    return [
        'nome' => $faker->jobTitle,
        'status' => true,
        'data_inicio' => date('Y-m-d'),
        'data_fim' => date('Y-m-d'),
        'user_turma' => 1,
    ]; 
});



$factory->define(App\Aula::class, function (Faker\Generator $faker){
    return [
        'nome' => $faker->lastName,
        'data' => date('Y-m-d'),
    ]; 
});