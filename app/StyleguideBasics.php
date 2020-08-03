<?php

namespace Xpersonas\Styleguide;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

/**
 * Class StyleguideBasics.
 *
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
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
