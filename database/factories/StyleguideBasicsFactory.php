<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Xpersonas\Styleguide\StyleguideBasics;
use Faker\Generator as Faker;

$factory->define(StyleguideBasics::class, function (Faker $faker) {
    return [
        'headings' => $faker->boolean(75),
        'text' => $faker->boolean(75),
        'lists' => $faker->boolean(75),
        'blockquote' => $faker->boolean(75),
        'rule' => $faker->boolean(75),
        'table' => $faker->boolean(75),
        'breadcrumbs' => $faker->boolean(75),
        'forms' => $faker->boolean(75),
        'buttons' => $faker->boolean(75),
        ];
});
