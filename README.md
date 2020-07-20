## Xpersonas Laravel Styleguide

Custom styleguide package for Laravel development.

## Installation

Add project via composer file:

```
"autoload": {
    "psr-4": {
        ...
        "Xpersonas\\Styleguide\\": "packages/xpersonas/styleguide/app",
    },
    ...
},
```

### Component

The styleguide provides a component that can be dropped in any template. This allows you to drop it in a page where your styles will be applied.

```
<x-styleguide-styleguide />
```

### Stylesheets

The styleguide comes with a limited stylesheet for layout. Include this only on your styleguide page.

```
<link href="{{ asset('css/vendor/styleguide.css') }}" rel="stylesheet" type="text/css" />
```

## Author

**[xpersonas](mailto:justin.neel@gmail.com)**
