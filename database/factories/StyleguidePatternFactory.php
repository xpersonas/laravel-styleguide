<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Xpersonas\Styleguide\StyleguidePattern;
use Faker\Generator as Faker;

$factory->define(StyleguidePattern::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->text,
        'pattern' => $faker->randomHtml()
    ];
});
