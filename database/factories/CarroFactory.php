<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Carro;
use Faker\Generator as Faker;

$factory->define(Carro::class, function (Faker $faker) {
    return [
        'marca'=>$faker->name,
        'modelo'=>$faker->sentence(3,false),
    ];
});
