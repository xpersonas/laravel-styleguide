<?php

namespace Xpersonas\Styleguide\Http\Controllers;

use Xpersonas\Styleguide\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xpersonas\Styleguide\StyleguidePattern;

class StyleguidePatternController extends Controller
{
    public function index()
    {
        $patterns = StyleguidePattern::all();
        return view('styleguide::patterns/list', compact('patterns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('styleguide::patterns/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'pattern' => 'required',
        ]);

        StyleguidePattern::create($validatedData);

        return redirect()->route('pattern.index')->with('success', 'Styleguide pattern is successfully saved.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit(StyleguidePattern $pattern)
    {
        return view('styleguide::patterns/edit', compact('pattern'));
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'pattern' => 'required',
        ]);

        StyleguidePattern::updateOrCreate(['id' => $id], $validatedData);

        return redirect()->route('pattern.index')->with('success', 'Styleguide pattern is successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(StyleguidePattern $pattern)
    {
        $pattern->delete();

        return redirect()->route('pattern.index')->with('success', 'Styleguide pattern is successfully deleted.');
    }
}
