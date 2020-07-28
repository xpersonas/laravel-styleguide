<?php

namespace Xpersonas\Styleguide\Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Xpersonas\Styleguide\StyleguideColor;
use Xpersonas\Styleguide\Tests\TestCase;

class StyleguideColorControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        $response = $this->get(route('color.index'));
        $response->assertStatus(200);
    }

    public function test_create()
    {
        $response = $this->get(route('color.create'));
        $response->assertStatus(200);
    }

    public function test_store()
    {
        $color = factory(StyleguideColor::class)->make();
        $this->post(route('color.store'), $color->toArray());
        $this->assertEquals(1, StyleguideColor::all()->count());

        $color = factory(StyleguideColor::class)->create();
        $response = $this->get(route('color.index')); // your route to get
        $response->assertSee($color->class);
    }

    public function test_edit()
    {
        $color = factory(StyleguideColor::class)->create();
        $response = $this->get(route('color.edit', $color->id)); // your
        $response->assertStatus(200);
        $response->assertSee($color->class);
    }

    public function test_update()
    {
        $color = factory(StyleguideColor::class)->create();
        $color->class = "Updated Title";
        $this->put(route('color.update', $color->id), $color->toArray());
        $this->assertDatabaseHas('styleguide_colors',['id'=> $color->id , 'class' => 'Updated Title']);
    }

    public function test_destroy()
    {
        $color = factory(StyleguideColor::class)->create();
        $this->assertDatabaseHas('styleguide_colors', ['id'=> $color->id]);
        $this->delete(route('color.destroy', $color->id), $color->toArray());
        $this->assertDatabaseMissing('styleguide_colors', ['id'=> $color->id]);
    }
}
