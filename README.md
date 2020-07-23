## Xpersonas Laravel Styleguide

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
