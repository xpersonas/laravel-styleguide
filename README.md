## Xpersonas Laravel Styleguide

This package allows admins to create a custom styleguide for Laravel project development. 

**Basic Elements**  
Choose from a list of basic elements like headings, text, tables, etc.. 

<img width="808" alt="Screen Shot 2020-07-23 at 9 49 39 AM" src="https://user-images.githubusercontent.com/5023924/88301527-57663e80-ccca-11ea-9f60-96255b3b65bb.png">

**Colors**  
Provide a list of colors with class name, description, and hex value.

<img width="808" alt="Screen Shot 2020-07-23 at 9 47 56 AM" src="https://user-images.githubusercontent.com/5023924/88301583-69e07800-ccca-11ea-9311-e72eef821047.png">

**Custom Patterns**  
Admins can also create custom patterns with a built in codemirror textarea. 

<img width="765" alt="Screen Shot 2020-07-23 at 9 44 36 AM" src="https://user-images.githubusercontent.com/5023924/88301557-60571000-ccca-11ea-89f8-55958e6f79c0.png">

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
