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

mix.scripts([
    'resources/js/jquery.min.js',
    'resources/js/browser.min.js',
    'resources/js/breakpoints.min.js',
    'resources/js/util.js',
    'resources/js/main.js'
], 'public/js/app.js')
    .styles([
        'resources/css/fontawesome-all.min.css',
        'resources/css/main.css'
    ], 'public/css/main.css');
