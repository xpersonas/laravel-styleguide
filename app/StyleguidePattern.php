<?php

namespace Xpersonas\Styleguide;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StyleguidePattern
 *
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class StyleguidePattern extends Model
{
    protected $fillable = ['title', 'description', 'pattern'];
}
