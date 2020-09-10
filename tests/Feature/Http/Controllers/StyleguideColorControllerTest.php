<?php

namespace Xpersonas\Styleguide\Tests\Feature\Http\Controllers;

use Xpersonas\Styleguide\Tests\TestCase;
use Xpersonas\Styleguide\Models\StyleguideColor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Xpersonas\Styleguide\Database\Factories\StyleguideColorFactory;

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
        $color = StyleguideColorFactory::new()->make();
        $response = $this->post(route('color.store'), $color->toArray());
        $response->assertSessionHasNoErrors();
        $this->assertEquals(1, StyleguideColor::all()->count());

        $color = StyleguideColorFactory::new()->create();
        $response = $this->get(route('color.index')); // your route to get
        $response->assertSessionHasNoErrors();
        $response->assertSee($color->class);
    }

    public function test_edit()
    {
        $color = StyleguideColorFactory::new()->create();
        $response = $this->get(route('color.edit', $color->id)); // your
        $response->assertStatus(200);
        $response->assertSee($color->class);
    }

    public function test_update()
    {
        $color = StyleguideColorFactory::new()->create();
        $color->class = "Updated Title";
        $response = $this->put(route('color.update', $color->id), $color->toArray());
        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('styleguide_colors',['id'=> $color->id , 'class' => 'Updated Title']);
    }

    public function test_destroy()
    {
        $color = StyleguideColorFactory::new()->create();
        $this->assertDatabaseHas('styleguide_colors', ['id'=> $color->id]);
        $response = $this->delete(route('color.destroy', $color->id), $color->toArray());
        $response->assertSessionHasNoErrors();
        $this->assertDatabaseMissing('styleguide_colors', ['id'=> $color->id]);
    }

    public function test_hex_is_properly_formatted()
    {
        $color = StyleguideColorFactory::new()->make([
            'hex' => "#FFFFFF"
        ]);
        $response = $this->post(route('color.store'), $color->toArray());
        $response->assertSessionHasNoErrors();
        $this->assertEquals('#FFFFFF', StyleguideColor::first()->hex);

        $color = StyleguideColorFactory::new()->make([
            'hex' => "FFFFFF"
        ]);
        $response = $this->post(route('color.store'), $color->toArray());
        $response->assertSessionHasNoErrors();
        $this->assertEquals('#FFFFFF', StyleguideColor::first()->hex);

        $color = StyleguideColorFactory::new()->make([
            'hex' => "FFFF"
        ]);
        $response = $this->post(route('color.store'), $color->toArray());
        $response->assertSessionHasErrors();
    }
}
