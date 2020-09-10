<?php

namespace Xpersonas\Styleguide\Models;

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
