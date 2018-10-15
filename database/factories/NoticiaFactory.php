<?php

use Faker\Generator as Faker;

$factory->define(App\noticia::class, function (Faker $faker) {

    return [

        'titulo'=>$faker->realText(25),
        'descricao'=>$faker->realText(50),
        'texto' =>$faker->realText(3000)
    ];
});
