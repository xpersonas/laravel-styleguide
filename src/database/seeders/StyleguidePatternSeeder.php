<?php

namespace Xpersonas\Styleguide\Database\Seeders;

use Illuminate\Database\Seeder;
use Xpersonas\Styleguide\Models\StyleguidePattern;

class StyleguidePatternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StyleguidePattern::class, 50)->create();
    }
}
