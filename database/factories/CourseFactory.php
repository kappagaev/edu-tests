<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course as Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'description' => $faker->text,
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true) ,
        'preview' => $faker->imageUrl(400, 300)
    ];
});
