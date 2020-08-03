<?php

namespace Xpersonas\Styleguide\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Xpersonas\Styleguide\Http\Controllers\StyleguideColorController;
use Xpersonas\Styleguide\View\Components\Base;

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
        $hexValue = $controller->formatHexValue('asdfsd');

        $this->assertMatchesRegularExpression('/^#/', $hexValue);
    }

    public function testHexToRgb()
    {
        $base = new Base();
        $hexValue = $base->hex2rgb('fff');
        $this->assertArrayHasKey('red', $hexValue);
        $this->assertArrayHasKey('green', $hexValue);
        $this->assertArrayHasKey('blue', $hexValue);

        $hexValue = $base->hex2rgb('ffff');
        $this->assertEmpty($hexValue);

    }
}
