<?php

namespace Xpersonas\Styleguide\Database\Factories;

use Xpersonas\Styleguide\Models\StyleguideBasics;
use Illuminate\Database\Eloquent\Factories\Factory;

class StyleguideBasicsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StyleguideBasics::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'headings' => $this->faker->boolean(75),
            'text' => $this->faker->boolean(75),
            'lists' => $this->faker->boolean(75),
            'blockquote' => $this->faker->boolean(75),
            'rule' => $this->faker->boolean(75),
            'table' => $this->faker->boolean(75),
            'breadcrumbs' => $this->faker->boolean(75),
            'forms' => $this->faker->boolean(75),
            'buttons' => $this->faker->boolean(75),
        ];
    }
}