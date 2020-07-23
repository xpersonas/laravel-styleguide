<?php

namespace Xpersonas\Styleguide\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
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
     * Test styleguide preview page for default patterns section.
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
     * Test styleguide preview page for custom patterns section.
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
     * Test styleguide preview page for colors section.
     *
     * @return void
     */
    public function testStyleguideDynamicContentColors()
    {
        factory(StyleguideColor::class, 4)->create();

        $response = $this->get('admin/styleguide');
        $response->assertSee('styleguide colors');
    }

    /**
     * Test styleguide pattern creation.
     *
     * @return void
     */
    public function testStyleguidePatternCreation()
    {
        //Given we have article in the database
        $pattern = factory(StyleguidePattern::class)->create();

        //When user visit the articles page
        $response = $this->get(route('pattern.index')); // your route to get article

        //He should be able to read the articles
        $response->assertSee($pattern->title);
    }

    /**
     * Test styleguide color creation.
     *
     * @return void
     */
    public function testStyleguideColorCreation()
    {
        //Given we have article in the database
        $color = factory(StyleguideColor::class)->create();

        //When user visit the articles page
        $response = $this->get(route('color.index')); // your route to get article

        //He should be able to read the articles
        $response->assertSee($color->class);
    }

    /**
     * Test styleguide basics settings.
     *
     * @return void
     */
    public function testStyleguideBasicsCreation()
    {
        //Given we have article in the database
        $exampleModel = factory(StyleguideBasics::class)->create();
        $fieldOptions = $exampleModel->getFillable();

        $basic = factory(StyleguideBasics::class)->create([
            "$fieldOptions[0]" => true,
        ]);

        //When user visit the articles page
        $response = $this->get(route('simple-styleguide')); // your route to get article

        //He should be able to read the articles
        $response->assertSee($fieldOptions[0]);
    }

    /**
     * Test styleguide color store.
     *
     * @return void
     */
    public function testStyleguideAdminColorForm()
    {
        $color = factory(StyleguideColor::class)->make();

        $this->post(route('color.store'), $color->toArray());

        //It gets stored in the database
        $this->assertEquals(1, StyleguideColor::all()->count());
    }

    /**
     * Test styleguide pattern store.
     *
     * @return void
     */
    public function testStyleguideAdminPatternForm()
    {
        $pattern = factory(StyleguidePattern::class)->make();

        $this->post(route('pattern.store'), $pattern->toArray());

        //It gets stored in the database
        $this->assertEquals(1, StyleguidePattern::all()->count());
    }

}
