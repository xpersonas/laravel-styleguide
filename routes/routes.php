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
Route::resource(
    'admin/styleguide/patterns',
    'Xpersonas\Styleguide\Http\Controllers\StyleguidePatternController',
    ['names' => 'pattern']
)->middleware(['web']);

Route::resource(
    'admin/styleguide/colors',
    'Xpersonas\Styleguide\Http\Controllers\StyleguideColorController',
    ['names' => 'color']
)->middleware(['web']);

Route::resource(
    'admin/styleguide/basics',
    'Xpersonas\Styleguide\Http\Controllers\StyleguideBasicsController',
    ['names' => 'basics']
)->middleware(['web']);
