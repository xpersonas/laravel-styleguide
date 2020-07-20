<?php

namespace Xpersonas\Styleguide\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Xpersonas\Styleguide\Http\Controllers\StyleguideColorController;

class XpersonasStyleguideUnitTest extends TestCase
{
    /**
     * Test hex value conversion.
     *
     * When given a string without a #, this method will prepend it for you.
     *
     * @return void
     */
    public function testHexValueConversion()
    {
        $controller = new StyleguideColorController();
        $hexValue = $controller->formatHexValue('sdfsd');

        $this->assertMatchesRegularExpression('/^#/', $hexValue);
    }
}
