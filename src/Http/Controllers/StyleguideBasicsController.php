<?php

namespace Xpersonas\Styleguide\Http\Controllers;

use Xpersonas\Styleguide\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xpersonas\Styleguide\Models\StyleguideBasics;

class StyleguideBasicsController extends Controller
{

    /**
     * Show settings.
     *
     * There should only be one model, but if for some reason more than one
     * exists this will return the last one.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index()
    {
        $basics = StyleguideBasics::all();

        if (!$basics->isEmpty()) {
            $id = $basics->last()->id;
            return redirect()->route('basics.edit', $id)->with('success', 'Styleguide color is successfully saved.');
        } else {
            $styleguideBasics = new StyleguideBasics();
            $fillable = $styleguideBasics->getFillable();

            return view('styleguide::basics/edit', compact('fillable'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $styleguideBasics = new StyleguideBasics();
        $fillable = $styleguideBasics->getFillable();

        return view('styleguide::basics/edit', compact('fillable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $basics = collect($request->input('basics'))
            ->mapWithKeys(function ($value) {
                return [$value => 1];
            });

        StyleguideBasics::create($basics->toArray());

        return redirect()->route('basics.index')->with('success', 'Styleguide color is successfully saved.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit($id)
    {
        $basics = StyleguideBasics::findOrFail($id);
        $fillable = $basics->getFillable();

        return view('styleguide::basics/edit', compact('basics', 'fillable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $input = $request->input('basics');
        $styleguideBasics = new StyleguideBasics();
        $fillable = $styleguideBasics->getFillable();
        $model = $styleguideBasics->find($id);

        foreach ($fillable as $value) {
            if (!empty($input) && in_array($value, $input)) {
                $model->$value = 1;
            } else {
                $model->$value = 0;
            }
        }

        $model->save();

        return redirect()->route('basics.edit', $id)->with('success', 'Styleguide color is successfully updated.');
    }
}
