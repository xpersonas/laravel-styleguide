<?php

use Illuminate\Database\Seeder;
use Xpersonas\Styleguide\StyleguidePattern;

class StyleguidePatternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StyleguidePattern::class, 50)->create();
    }
}
