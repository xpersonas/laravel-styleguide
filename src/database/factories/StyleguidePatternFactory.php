<?php

namespace Xpersonas\Styleguide\Database\Factories;

use Xpersonas\Styleguide\Models\StyleguidePattern;
use Illuminate\Database\Eloquent\Factories\Factory;

class StyleguidePatternFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StyleguidePattern::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->text,
            'pattern' => $this->faker->randomHtml()
        ];
    }
}