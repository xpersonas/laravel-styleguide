<?php

namespace Xpersonas\Styleguide;

use Illuminate\Database\Eloquent\Model;

class StyleguidePattern extends Model
{
    protected $fillable = ['title', 'description', 'pattern'];
}
