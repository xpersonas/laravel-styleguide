## Xpersonas Laravel Styleguide

This package allows admins to create a custom styleguide for Laravel project development. 

**Basic Elements**  
Choose from a list of basic elements like headings, text, tables, etc.. 

![sg-main](https://user-images.githubusercontent.com/5023924/88302826-ecb60280-cccb-11ea-901e-ab99db2eb5fa.jpg)

**Colors**  
Provide a list of colors with class name, description, and hex value.

![sg-colors](https://user-images.githubusercontent.com/5023924/88302830-ed4e9900-cccb-11ea-88a9-c4606db6ed87.jpg)

**Custom Patterns**  
Admins can also create custom patterns with a built in codemirror textarea. 

![sg-pattern](https://user-images.githubusercontent.com/5023924/88302835-ede72f80-cccb-11ea-9c01-aabf6f6bcaac.jpg)

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
