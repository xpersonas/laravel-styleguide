<?php

namespace Xpersonas\Styleguide\Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Xpersonas\Styleguide\StyleguidePattern;
use Xpersonas\Styleguide\Tests\TestCase;

class StyleguidePatternControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        $response = $this->get(route('pattern.index'));
        $response->assertStatus(200);
    }

    public function test_create()
    {
        $response = $this->get(route('pattern.create'));
        $response->assertStatus(200);
    }

    public function test_store()
    {
        $pattern = factory(StyleguidePattern::class)->make();
        $this->post(route('pattern.store'), $pattern->toArray());
        $this->assertEquals(1, StyleguidePattern::all()->count());

        $pattern = factory(StyleguidePattern::class)->create();
        $response = $this->get(route('pattern.index')); // your route to get article
        $response->assertSee($pattern->title);
    }

    public function test_edit()
    {
        $pattern = factory(StyleguidePattern::class)->create();
        $response = $this->get(route('pattern.edit', $pattern->id)); // your
        $response->assertStatus(200);
        $response->assertSee($pattern->title);
    }

    public function test_update()
    {
        $pattern = factory(StyleguidePattern::class)->create();
        $pattern->title = "Updated Title";
        $this->put(route('pattern.update', $pattern->id), $pattern->toArray());
        $this->assertDatabaseHas('styleguide_patterns',['id'=> $pattern->id , 'title' => 'Updated Title']);
    }

    public function test_destroy()
    {
        $pattern = factory(StyleguidePattern::class)->create();
        $this->assertDatabaseHas('styleguide_patterns', ['id'=> $pattern->id]);
        $this->delete(route('pattern.destroy', $pattern->id), $pattern->toArray());
        $this->assertDatabaseMissing('styleguide_patterns', ['id'=> $pattern->id]);
    }
}
