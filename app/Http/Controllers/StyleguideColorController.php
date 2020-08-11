<?php

namespace Xpersonas\Styleguide\Http\Controllers;

use Xpersonas\Styleguide\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Xpersonas\Styleguide\StyleguideColor;

class StyleguideColorController extends Controller
{

    /**
     * List all colors.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $colors = StyleguideColor::all();
        return view('styleguide::colors/list', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('styleguide::colors/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->merge(['hex' => $this->formatHexValue($request->hex)]);

        $request->validate([
            'class' => 'required|max:255',
            'description' => 'required',
            'hex' => 'required',
        ]);

        StyleguideColor::create($request->all());

        return redirect()->route('color.index')->with('success', 'Styleguide color is successfully saved.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Xpersonas\Styleguide\StyleguideColor $color
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit(StyleguideColor $color)
    {
        return view('styleguide::colors/edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $request->merge(['hex' => $this->formatHexValue($request->hex)]);

        $request->validate([
            'class' => 'required|max:255',
            'description' => 'required',
            'hex' => 'required',
        ]);

        StyleguideColor::updateOrCreate(['id' => $id], $request->all());

        return redirect()->route('color.index')->with('success', 'Styleguide color is successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Xpersonas\Styleguide\StyleguideColor $color
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(StyleguideColor $color)
    {
        $color->delete();
        return redirect()->route('color.index')->with('success', 'Styleguide color is successfully deleted.');
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
