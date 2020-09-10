<?php

namespace Xpersonas\Styleguide\Tests;

use Xpersonas\Styleguide\StyleguideServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    public $useMigrations = true;

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


        if ($this->useMigrations) {
            $this->loadMigrationsFrom(__DIR__.'/../src/database/migrations');
        }
    }
}
