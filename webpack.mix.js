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
mix.extract(['jquery', 'vue', 'axios', 'lodash', 'bootstrap', 'popper.js'], 'public/vendor.js');

mix.js('resources/js/backend/app.js', 'public/backend/js')
    .sass('resources/js/backend/assets/app.scss', 'public/backend/css')
    .sourceMaps()
    .version();

mix.js('resources/js/frontend/app.js', 'public/frontend/js')
    .sass('resources/js/frontend/assets/app.scss', 'public/frontend/css')
    .sourceMaps()
    .version();
