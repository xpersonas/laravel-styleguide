## Xpersonas Laravel Styleguide

This package allows admins to create a custom styleguide for Laravel project development. 

**Basic Elements**  
Choose from a list of basic elements like headings, text, tables, etc.. 

**Colors**  
Provide a list of colors with class name, description, and hex value.

**Custom Patterns**  
Admins can also create custom patterns with a built in codemirror textarea. 

## Installation

```
composer require xpersonas/styleguide
php artisan vendor:publish --tag=xpersonas-styleguide
php artisan migrate
```

### Component

The styleguide provides a component that can be dropped in any template. This allows you to drop it in a page where your styles will be applied.

```
<x-styleguide-styleguide />
```

### Stylesheets

The styleguide comes with a limited stylesheet for layout. Include this only on your styleguide page.

```
<link href="{{ asset('css/vendor/xpersonas/styleguide.css') }}" rel="stylesheet" type="text/css" />
```

## Author

**[xpersonas](mailto:justin.neel@gmail.com)**
