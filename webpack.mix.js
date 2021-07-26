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

mix.js('resources/js/backend/app.js', 'public/backend/js')
    .sass('resources/js/backend/assets/app.scss', 'public/backend/css')
    .extract(['jquery', 'vue', 'axios', 'lodash', 'bootstrap', 'popper.js'])
    .sourceMaps()
    .version();
