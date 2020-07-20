<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Xpersonas\Styleguide\StyleguideColor;
use Faker\Generator as Faker;

$factory->define(StyleguideColor::class, function (Faker $faker) {
    return [
        'class' => $faker->word,
        'description' => $faker->text,
        'hex' => $faker->hexcolor
    ];
});
