<?php

namespace Xpersonas\Styleguide\Providers;

use Illuminate\Support\ServiceProvider;
use Xpersonas\Styleguide\Observers\StyleguideColorObserver;
use Xpersonas\Styleguide\StyleguideColor;

class StyleguideColorModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        StyleguideColor::observe(StyleguideColorObserver::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
