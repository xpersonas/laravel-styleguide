<?php

namespace Xpersonas\Styleguide\Http\Controllers;

use Xpersonas\Styleguide\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xpersonas\Styleguide\StyleguideColor;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class StyleguideColorController extends Controller
{
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
        $hexValue = $this->formatHexValue($request->get('hex'));

        $request->merge([
            'hex' => $hexValue,
        ]);

        $validatedData = $request->validate([
            'class' => 'required|max:255',
            'description' => 'required',
            'hex' => 'required',
        ]);
        $show = StyleguideColor::create($validatedData);

        return redirect()->route('color.index')->with('success', 'Styleguide color is successfully saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit($id)
    {
        $color = StyleguideColor::findOrFail($id);

        return view('styleguide::colors/edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $hexValue = $this->formatHexValue($request->get('hex'));

        $request->merge([
            'hex' => $hexValue,
        ]);

        $validatedData = $request->validate([
            'class' => 'required|max:255',
            'description' => 'required',
            'hex' => 'required',
        ]);
        StyleguideColor::whereId($id)->update($validatedData);

        return redirect()->route('color.index')->with('success', 'Styleguide color is successfully updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $color = StyleguideColor::findOrFail($id);
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
    public function formatHexValue($value) {
        if (!preg_match('/^#/', $value)) {
            return '#' . $value;
        }

        return $value;
    }
}
