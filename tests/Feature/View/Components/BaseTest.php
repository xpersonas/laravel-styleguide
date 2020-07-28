<?php

namespace Xpersonas\Styleguide\Tests\Feature\View\Components;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Xpersonas\Styleguide\StyleguideBasics;
use Xpersonas\Styleguide\Tests\TestCase;
use Xpersonas\Styleguide\View\Components\Base;

class baseTest extends TestCase
{
    use RefreshDatabase;

    public function test_isDefaultComponentsEmpty()
    {
        factory(StyleguideBasics::class)->create([
            'headings' => 0,
            'text' => 0,
            'lists' => 0,
            'blockquote' => 0,
            'rule' => 0,
            'table' => 0,
            'breadcrumbs' => 0,
            'forms' => 0,
            'buttons' => 0,
        ]);

        $basicSettings = StyleguideBasics::all();
        $base = new Base();
        $test = $base->isDefaultComponentsEmpty($basicSettings[0]);
        $this->assertTrue($test);
    }

}
