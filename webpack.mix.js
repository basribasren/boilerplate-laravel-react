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

mix.react('resources/views/merge-react.js', 'public/assets/js');

mix.sass('resources/react/assets/sass/black-dashboard-react.scss', 'public/assets/css');
mix.copyDirectory('resources/react/assets/fonts', 'public/assets/fonts');
mix.copyDirectory('resources/react/assets/demo', 'public/assets/demo');

