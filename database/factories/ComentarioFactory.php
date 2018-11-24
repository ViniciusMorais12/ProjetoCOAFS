<?php

use App\User;
use App\Noticia;

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
$factory->define(App\Comentario::class, function (Faker\Generator $faker) {
    return [
        'text' => $faker->realtext(300),
        'usuario' => rand(1, User::get()->count()),
        'noticia' => rand(1, Noticia::get()->count())
    ];
});
