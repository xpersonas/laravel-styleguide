<?php

namespace Xpersonas\Styleguide\Tests\Feature;

use Xpersonas\Styleguide\Tests\TestCase;

class XpersonasStyleguideFeaturesTestWithoutMigration extends TestCase
{

    // Test for error/help message when viewing styleguide without migration.
    public function testStyleguideErrorView()
    {
        $response = $this->get(route('simple-styleguide'));
        $response->assertSee('Unable to read database tables');
    }

}
