<?php

namespace Xpersonas\Styleguide\Models;

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
