<?php

namespace Xpersonas\Styleguide\Tests\Feature\Http\Controllers;

use Xpersonas\Styleguide\Tests\TestCase;
use Xpersonas\Styleguide\Models\StyleguidePattern;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Xpersonas\Styleguide\Database\Factories\StyleguidePatternFactory;

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
        $pattern = StyleguidePatternFactory::new()->make();
        $this->post(route('pattern.store'), $pattern->toArray());
        $this->assertEquals(1, StyleguidePattern::all()->count());

        $pattern = StyleguidePatternFactory::new()->create();
        $response = $this->get(route('pattern.index')); // your route to get article
        $response->assertSee($pattern->title);
    }

    public function test_edit()
    {
        $pattern = StyleguidePatternFactory::new()->create();
        $response = $this->get(route('pattern.edit', $pattern->id)); // your
        $response->assertStatus(200);
        $response->assertSee($pattern->title);
    }

    public function test_update()
    {
        $pattern = StyleguidePatternFactory::new()->create();
        $pattern->title = "Updated Title";
        $this->put(route('pattern.update', $pattern->id), $pattern->toArray());
        $this->assertDatabaseHas('styleguide_patterns',['id'=> $pattern->id , 'title' => 'Updated Title']);
    }

    public function test_destroy()
    {
        $pattern = StyleguidePatternFactory::new()->create();
        $this->assertDatabaseHas('styleguide_patterns', ['id'=> $pattern->id]);
        $this->delete(route('pattern.destroy', $pattern->id), $pattern->toArray());
        $this->assertDatabaseMissing('styleguide_patterns', ['id'=> $pattern->id]);
    }
}
