<?php

namespace Xpersonas\Styleguide\Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Xpersonas\Styleguide\Tests\TestCase;

class StyleguideControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        $response = $this->get(route('simple-styleguide'));
        $response->assertStatus(200);
    }
}
