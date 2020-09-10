<?php

namespace Xpersonas\Styleguide\Tests\Feature;

use Xpersonas\Styleguide\Tests\TestCase;

class XpersonasStyleguideFeaturesTestWithoutMigration extends TestCase
{
    protected function setUp(): void
    {
        $this->useMigrations = false;

        parent::setUp();
    }

    // Test for error/help message when viewing styleguide without migration.
    public function testStyleguideErrorView()
    {
        $response = $this->get(route('simple-styleguide'));

        $response->assertSee('Unable to read database tables');
    }

}
