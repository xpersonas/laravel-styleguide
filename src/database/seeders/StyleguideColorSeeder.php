<?php

namespace Xpersonas\Styleguide\Database\Seeders;

use Illuminate\Database\Seeder;
use Xpersonas\Styleguide\Models\StyleguideColor;

class StyleguideColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StyleguideColor::class, 5)->create();
    }
}
