<?php

namespace Xpersonas\Styleguide\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Xpersonas\Styleguide\Models\StyleguideBasics;
use Xpersonas\Styleguide\Models\StyleguidePattern;
use Xpersonas\Styleguide\Models\StyleguideColor;
use Xpersonas\Styleguide\Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Xpersonas\Styleguide\Database\Factories\StyleguideBasicsFactory;
use Xpersonas\Styleguide\Database\Factories\StyleguideColorFactory;
use Xpersonas\Styleguide\Database\Factories\StyleguidePatternFactory;

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
        StyleguideBasicsFactory::new()->count(10)->create();

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
        StyleguidePatternFactory::new()->count(10)->create();

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
        StyleguideColorFactory::new()->count(10)->create();

        $response = $this->get('admin/styleguide');
        $response->assertSee('styleguide colors');
    }

}
