<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Municipe;
use Faker\Generator as Faker;

$factory->define(Municipe::class, function (Faker $faker) {
    return [
        'nome' => $faker->word,
        'bairro' => $faker->word,
        'telefone' => $faker->word,
        'rg' => $faker->word,

    ];
});
