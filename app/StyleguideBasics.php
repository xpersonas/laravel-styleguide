<?php

namespace Xpersonas\Styleguide;

use Illuminate\Database\Eloquent\Model;

class StyleguideBasics extends Model
{
    protected $fillable = [
        'headings',
        'text',
        'lists',
        'blockquote',
        'rule',
        'table',
        'breadcrumbs',
        'forms',
        'buttons',
    ];
}
