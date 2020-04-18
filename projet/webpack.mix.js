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
	.js('resources/js/jquery.js', 'public/js')
    .js('resources/js/alert.js', 'public/js')
    .js('resources/js/artistid.js', 'public/js')
    .js('resources/js/topalbum.js', 'public/js')
    .js('resources/js/favtracks.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/topfrance.scss', 'public/css')
    .sass('resources/sass/topalbum.scss', 'public/css')
    .sass('resources/sass/favoritetracks.scss', 'public/css')
    .copyDirectory('resources/img', 'public/img');



// mix.styles([
//'public/css/app.scss',
//]'public/css/.scss',
//);
