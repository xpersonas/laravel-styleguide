<?php

namespace Xpersonas\Styleguide\Database\Seeders;

use Illuminate\Database\Seeder;
use Xpersonas\Styleguide\Models\StyleguideBasics;

class StyleguideBasicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StyleguideBasics::class, 1)->create();
    }
}
