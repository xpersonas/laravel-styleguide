<?php

namespace Xpersonas\Styleguide;

use Illuminate\Database\Eloquent\Model;

class StyleguideColor extends Model
{
    protected $fillable = ['class', 'description', 'hex'];
}
