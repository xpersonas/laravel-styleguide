<?php

namespace Xpersonas\Styleguide;

use Illuminate\Support\ServiceProvider;
use Xpersonas\Styleguide\Observers\StyleguideColorObserver;
use Xpersonas\Styleguide\Models\StyleguideColor;

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
