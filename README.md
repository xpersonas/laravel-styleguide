# Laravel Styleguide
![build](https://github.com/xpersonas/laravel-styleguide/workflows/build/badge.svg)
[![PHP version](https://badge.fury.io/ph/xpersonas%2Flaravel-styleguide.svg)](https://badge.fury.io/ph/xpersonas%2Flaravel-styleguide)
[![Total Downloads](https://poser.pugx.org/xpersonas/laravel-styleguide/downloads)](//packagist.org/packages/xpersonas/laravel-styleguide)
[![License](https://poser.pugx.org/xpersonas/laravel-styleguide/license)](https://github.com/xpersonas/laravel-styleguide/blob/master/LICENSE.txt)
[![Maintainability](https://api.codeclimate.com/v1/badges/1285e02e470cea7d401d/maintainability)](https://codeclimate.com/github/xpersonas/laravel-styleguide/maintainability)

This package allows admins to create a custom styleguide for Laravel project development. 

**Basic Elements**  
Choose from a list of basic elements like headings, text, tables, etc.. 

![svg-main-x](https://user-images.githubusercontent.com/5023924/88303382-96958f00-cccc-11ea-8a8a-5b86f75fb556.jpg)

**Colors**  
Provide a list of colors with class name, description, and hex value.

![sg-colors-x](https://user-images.githubusercontent.com/5023924/88303381-96958f00-cccc-11ea-9bca-c42a90494b22.jpg)

**Custom Patterns**  
Admins can also create custom patterns with a built in codemirror textarea. 

![sg-pattern-x](https://user-images.githubusercontent.com/5023924/88303380-95fcf880-cccc-11ea-9c65-05a2f0302329.jpg)

## Installation

This package comes with 3 models: basic settings, colors, and patterns. Run the following 

```
composer require xpersonas/styleguide
php artisan vendor:publish --tag=xpersonas-styleguide
php artisan migrate
```

## Usage

The styleguide provides a Laravel component that can be dropped in any of your templates. This allows you to drop it in a page where your styles will be applied to all the elements contained within the styleguide.

Add this to your template:
```
<x-styleguide-base />
```

Edit your Styleguide settings by visiting `/simple-styleguide` on your site.

## Stylesheets

The styleguide comes with a limited stylesheet for layout purposes. Include this only on your styleguide page if needed.

```
<link href="{{ asset('css/vendor/xpersonas/styleguide.css') }}" rel="stylesheet" type="text/css" />
```

## Protecting Routes

There are several CRUD-related pages that will need protection from anonymous users. Please use what ever authentication system you are using to ensure these pages are safe from the public.

```
// Route setup.
Route::get('admin/styleguide/preview', '\Xpersonas\Styleguide\Http\Controllers\StyleguideController@index')->name('simple-styleguide');

Route::resource('admin/styleguide/patterns','Xpersonas\Styleguide\Http\Controllers\StyleguidePatternController', ['names' => 'pattern'])->middleware(['web']);
Route::resource('admin/styleguide/colors','Xpersonas\Styleguide\Http\Controllers\StyleguideColorController', ['names' => 'color'])->middleware(['web']);
Route::resource('admin/styleguide/basics','Xpersonas\Styleguide\Http\Controllers\StyleguideBasicsController', ['names' => 'basics'])->middleware(['web']);

// Wildcard route to protect.
admin/styleguide/*
```

## Nova Ready (optional)
https://nova.laravel.com

This package is Nova-ready. If you want to manage styleguide settings, patterns, and colors within a "beautifully designed administration panel" then follow the instructions below.

<img width="1259" alt="Screen Shot 2020-08-13 at 12 29 12 PM" src="https://user-images.githubusercontent.com/5023924/90166943-9b47e300-dd60-11ea-90b1-7f8a8b1f5afe.png">

### Installation

Modify your Nova service provider.
```
// app/Providers/NovaServiceProvider.php

use Xpersonas\Styleguide\Nova\StyleguideBasics;
use Xpersonas\Styleguide\Nova\StyleguideColor;
use Xpersonas\Styleguide\Nova\StyleguidePattern;
```

Then add the resource() method with the following resources:

```
// app/Providers/NovaServiceProvider.php

/**
 * Register the application's Nova resources.
 *
 * @return void
 */
protected function resources()
{
    Nova::resourcesIn(app_path('Nova'));

    Nova::resources([
        StyleguideBasics::class,
        StyleguidePattern::class,
        StyleguideColor::class,
    ]);
}
```

### Laravel Nova Color Field (optional)

This package is also compatible with the excellent Laravel Nova Color Field from [timothyasp](https://github.com/timothyasp/nova-color-field). 

```
composer require timothyasp/nova-color-field
```

<img width="1006" alt="Screen Shot 2020-08-13 at 12 09 42 PM" src="https://user-images.githubusercontent.com/5023924/90165163-e4e2fe80-dd5d-11ea-843b-7e5a27e162db.png">

## Contribute

https://github.com/xpersonas/laravel-styleguide/pulls

## Author

**[xpersonas](mailto:justin.neel@gmail.com)**
