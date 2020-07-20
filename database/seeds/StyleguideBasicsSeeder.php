<?php

use Illuminate\Database\Seeder;
use Xpersonas\Styleguide\StyleguideBasics;

class StyleguideBasicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StyleguideBasics::class, 1)->create();
    }
}
