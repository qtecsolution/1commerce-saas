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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/product/index.js', 'public/assets/js/product/').vue()
    .js('resources/js/purchase/index.js', 'public/assets/js/purchase/').vue()
    .js('resources/js/pos/index.js', 'public/assets/js/pos/').vue()
    .js('resources/js/product/variation.js', 'public/assets/js/product/').vue()
    .js('resources/js/template/edit_template_2.js', 'public/assets/js/template/').vue()
    .sourceMaps();
