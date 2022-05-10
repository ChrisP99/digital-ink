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
    .sass('resources/sass/app.scss', 'public/css');

mix.autoload({
    jquery: ['$', 'window.jQuery']
});

mix.js([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/jquery-validation/dist/jquery.validate.min.js',
    'node_modules/jquery-validation/dist/additional-methods.min.js',
    'resources/js/check_create_update_input.js'
], 'public/js/check_create_update_input.js');
