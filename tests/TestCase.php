<?php

namespace Xpersonas\Styleguide\Tests;

use Xpersonas\Styleguide\StyleguideServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            StyleguideServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Xpersonas' => 'Xpersonas\Styleguide'
        ];
    }

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->loadMigrationsFrom(__DIR__.'/../src/database/migrations');
    }
}
