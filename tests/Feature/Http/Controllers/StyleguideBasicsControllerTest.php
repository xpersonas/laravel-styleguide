<?php

namespace Xpersonas\Styleguide\Tests\Feature\Http\Controllers;

use Illuminate\Http\Client\Request;
use Xpersonas\Styleguide\Tests\TestCase;
use Xpersonas\Styleguide\Models\StyleguideBasics;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Xpersonas\Styleguide\Database\Factories\StyleguideBasicsFactory;

class StyleguideBasicsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        $response = $this->get(route('basics.index'));
        $response->assertStatus(200);

        $basics = StyleguideBasicsFactory::new()->create([
            'headings' => 1,
        ]);
        $response = $this->get(route('basics.index'));
        $response->assertRedirect(route('basics.edit', $basics->id));
    }

    public function test_create()
    {
        $response = $this->get(route('basics.create'));
        $response->assertStatus(200);
    }

    public function test_store()
    {
        // Select a few random settings that we'll activate and test.
        $requester['basics'] = [
            'headings',
            'text',
            'rule',
        ];

        // Post to update route.
        $this->post(route('basics.store'), $requester);

        // Assert values changed on existing settings.
        $this->assertDatabaseHas('styleguide_basics', [
            'headings' => 1,
            'text' => 1,
            'rule' => 1,
        ]);
    }

    public function test_edit()
    {
        $basics = StyleguideBasicsFactory::new()->create();
        $response = $this->get(route('basics.edit', $basics->id));
        $response->assertStatus(200);
        $response->assertSee($basics->title);
    }

    public function test_update()
    {
        // Create a record of basic settings with all options inactive.
        $basics = StyleguideBasicsFactory::new()->create([
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

        // Select a few random settings that we'll activate and test.
        $requester['basics'] = [
            'headings',
            'text',
            'rule',
        ];

        // Post to update route.
        $this->put(route('basics.update', $basics->id), $requester);

        // Assert values changed on existing settings.
        $this->assertDatabaseHas('styleguide_basics', [
            'id'=> $basics->id ,
            'headings' => 1,
            'text' => 1,
            'lists' => 0,
            'blockquote' => 0,
            'rule' => 1,
            'table' => 0,
            'breadcrumbs' => 0,
            'forms' => 0,
            'buttons' => 0,
        ]);
    }
}
