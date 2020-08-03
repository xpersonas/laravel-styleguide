<?php

namespace Xpersonas\Styleguide;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StyleguideColor
 *
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class StyleguideColor extends Model
{
    protected $fillable = ['class', 'description', 'hex'];
}
