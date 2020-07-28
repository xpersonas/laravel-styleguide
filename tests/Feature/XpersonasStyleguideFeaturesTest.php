<?php

namespace Xpersonas\Styleguide\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Xpersonas\Styleguide\StyleguideBasics;
use Xpersonas\Styleguide\StyleguidePattern;
use Xpersonas\Styleguide\StyleguideColor;
use Xpersonas\Styleguide\Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class XpersonasStyleguideFeaturesTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;
    use WithFaker;

    /**
     * Test package routes.
     *
     * @return void
     */
    public function testStyleguideRoutes()
    {
        $response = $this->get('admin/styleguide/patterns');
        $response->assertStatus(200);

        $response = $this->get('admin/styleguide/colors');
        $response->assertStatus(200);

        $response = $this->get('admin/styleguide/basics');
        $response->assertStatus(200);

        $response = $this->get('admin/styleguide');
        $response->assertStatus(200);
    }

    /**
     * Test that selected basic elements show up on styleguide preview.
     *
     * @return void
     */
    public function testStyleguideDynamicContentBasics()
    {
        factory(StyleguideBasics::class, 10)->create();

        $response = $this->get('admin/styleguide');
        $response->assertSee('Default patterns');
    }

    /**
     * Test that custom patterns show up on styleguide preview.
     *
     * @return void
     */
    public function testStyleguideDynamicContentPatterns()
    {
        factory(StyleguidePattern::class, 10)->create();

        $response = $this->get('admin/styleguide');
        $response->assertSee('Custom patterns');
    }

    /**
     * Test that custom colors show up on styleguide preview.
     *
     * @return void
     */
    public function testStyleguideDynamicContentColors()
    {
        factory(StyleguideColor::class, 4)->create();

        $response = $this->get('admin/styleguide');
        $response->assertSee('styleguide colors');
    }

}
