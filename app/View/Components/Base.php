<?php

namespace Xpersonas\Styleguide\View\Components;

use Illuminate\View\Component;
use Xpersonas\Styleguide\StyleguideBasics;
use Xpersonas\Styleguide\StyleguideColor;
use Xpersonas\Styleguide\StyleguidePattern;

class Base extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        // Check to ensure migration has been run and tables exist.
        if (!\Schema::hasTable('styleguide_colors') ||
            !\Schema::hasTable('styleguide_patterns') ||
            !\Schema::hasTable('styleguide_basics')
        ) {
            return view('styleguide::components.base-error', ['error' => true]);
        }

        $colorsEntities = StyleguideColor::all();
        $colors = null;
        foreach ($colorsEntities as $key => $value) {
            $rgb = $this->hex2rgb($value->hex);
            $colors[$key] = [
                'class' => $value->class,
                'description' => $value->description,
                'hex' => $value->hex,
                'rgb' => implode(', ', $rgb),
            ];
        }

        $patternsEntities = StyleguidePattern::all();
        $patterns = null;
        foreach ($patternsEntities as $key => $value) {
            $patterns[$key] = [
                'id' => $value->id,
                'title' => $value->title,
                'description' => $value->description,
                'pattern' => $value->pattern,
            ];
        }

        $basicSettings = StyleguideBasics::all();
        if ($basicSettings->isEmpty() || $this->isDefaultComponentsEmpty($basicSettings[0])) {
            $basics = null;
        } else {
            $basics = StyleguideBasics::findOrFail($basicSettings[0]->id);
            $fillable = $basics->getFillable();
        }

        return view(
            'styleguide::components.base',
            compact('colors', 'patterns', 'basics')
        );
    }

    public function isDefaultComponentsEmpty($component)
    {
        if (!$component->headings &&
            !$component->text &&
            !$component->lists &&
            !$component->blockquote &&
            !$component->rule &&
            !$component->table &&
            !$component->breadcrumbs &&
            !$component->forms &&
            !$component->buttons
        ) {
            return true;
        }
    }

    /**
     * Convert hex values to rgb.
     *
     * @param $colour
     *
     * @return array|bool
     */
    public function hex2rgb($colour)
    {
        if ($colour[0] == '#') {
            $colour = substr($colour, 1);
        }

        if (strlen($colour) == 6) {
            [$r, $g, $b] = [
                $colour[0].$colour[1], $colour[2].$colour[3],
                $colour[4].$colour[5],
            ];
        } elseif (strlen($colour) == 3) {
            [$r, $g, $b] = [
                $colour[0].$colour[0], $colour[1].$colour[1],
                $colour[2].$colour[2],
            ];
        } else {
            return [];
        }

        $r = hexdec($r);
        $g = hexdec($g);
        $b = hexdec($b);

        return ['red' => $r, 'green' => $g, 'blue' => $b];
    }
}
