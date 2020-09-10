<?php

namespace Xpersonas\Styleguide\Http\Controllers;

use Xpersonas\Styleguide\Http\Controllers\Controller;

class StyleguideController extends Controller
{
    public function index()
    {
        return view('styleguide::index');
    }
}
