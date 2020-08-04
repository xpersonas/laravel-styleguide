<?php

/*
|--------------------------------------------------------------------------
| Styleguide Page.
|--------------------------------------------------------------------------
|
| Default styleguide output page. Use <x-styleguide-styleguide /> w/in your own templates.
|
*/
Route::get(
    'admin/styleguide',
    '\Xpersonas\Styleguide\Http\Controllers\StyleguideController@index'
)->name('simple-styleguide');

/*
|--------------------------------------------------------------------------
| Styleguide Admin Route.
|--------------------------------------------------------------------------
|
*/
Route::prefix('admin/styleguide')->group(function () {
    Route::resource(
        'patterns',
        'Xpersonas\Styleguide\Http\Controllers\StyleguidePatternController',
        ['names' => 'pattern']
    )->middleware(['web']);

    Route::get('colors', function () { dd('here'); });

    Route::resource(
        'colors',
        'Xpersonas\Styleguide\Http\Controllers\StyleguideColorController',
        ['names' => 'color']
    )->middleware(['web']);

    Route::resource(
        'basics',
        'Xpersonas\Styleguide\Http\Controllers\StyleguideBasicsController',
        ['names' => 'basics']
    )->middleware(['web']);
});
