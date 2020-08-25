<?php

namespace Xpersonas\Styleguide\Providers;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use Xpersonas\Styleguide\Nova\StyleguideColor;
use Xpersonas\Styleguide\Nova\StyleguideBasics;
use Xpersonas\Styleguide\Nova\StyleguidePattern;

class StyleguideNovaTool extends Tool 
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::resources([
            StyleguideBasics::class,
            StyleguidePattern::class,
            StyleguideColor::class,
        ]);
    }
}