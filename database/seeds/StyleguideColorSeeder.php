<?php

use Illuminate\Database\Seeder;
use Xpersonas\Styleguide\StyleguideColor;

class StyleguideColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StyleguideColor::class, 5)->create();
    }
}
