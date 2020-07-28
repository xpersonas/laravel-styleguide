const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sourceMaps()
    .js('resources/js/styleguide.js', 'public/js')
    .babel(['public/js/styleguide.js'], 'public/js/styleguide.js')
    .sass('resources/sass/styleguide.scss', 'public/css')
    .options({
        postCss: [
            require('autoprefixer')({
                grid: true
            })
        ]
    });
