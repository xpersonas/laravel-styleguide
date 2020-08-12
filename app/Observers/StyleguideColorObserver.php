<?php

namespace Xpersonas\Styleguide\Observers;

use Xpersonas\Styleguide\StyleguideColor;
use Illuminate\Support\Str;

class StyleguideColorObserver
{
    public function saving(StyleguideColor $color)
    {
        $color->hex = $this->formatHexValue($color->hex);
    }

    /**
     * Add pound sign to beginning of string if not present already.
     *
     * @param $value
     *
     * @return string
     */
    public function formatHexValue($value)
    {
        if (! Str::startsWith($value, '#')) {
            return '#'. $value;
        }

        return $value;
    }
}
