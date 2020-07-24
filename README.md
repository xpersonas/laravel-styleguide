## Xpersonas Laravel Styleguide
![Laravel Styleguide Test](https://github.com/xpersonas/laravel-styleguide/workflows/Laravel%20Styleguide%20Test/badge.svg)
[![GitHub release](https://img.shields.io/github/release/xpersonas/laravel-styleguide.svg)](https://gitHub.com/xpersonas/laravel-styleguide/releases/)
[![Packagist release](https://img.shields.io/packagist/v/xpersonas/laravel-styleguide.svg)](//packagist.org/packages/xpersonas/laravel-styleguide)
[![Total Downloads](https://poser.pugx.org/xpersonas/laravel-styleguide/downloads)](//packagist.org/packages/xpersonas/laravel-styleguide)
[![License](https://poser.pugx.org/xpersonas/laravel-styleguide/license)](https://github.com/xpersonas/laravel-styleguide/blob/master/LICENSE.txt)

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
<x-styleguide-styleguide />
```

## Stylesheets

The styleguide comes with a limited stylesheet for layout purposes. Include this only on your styleguide page if needed.

```
<link href="{{ asset('css/vendor/xpersonas/styleguide.css') }}" rel="stylesheet" type="text/css" />
```

### Protecting Routes

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

## Contribute

https://github.com/xpersonas/laravel-styleguide/pulls

## Author

**[xpersonas](mailto:justin.neel@gmail.com)**
