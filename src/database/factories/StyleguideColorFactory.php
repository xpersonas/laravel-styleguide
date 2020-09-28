<?php

namespace Xpersonas\Styleguide\Database\Factories;

use Xpersonas\Styleguide\Models\StyleguideColor;
use Illuminate\Database\Eloquent\Factories\Factory;

class StyleguideColorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StyleguideColor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'class' => $this->faker->word,
            'description' => $this->faker->text,
            'hex' => $this->faker->hexcolor
        ];
    }
}
