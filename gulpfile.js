var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

 elixir(function(mix) {
     mix.less('landing/main.less');
 });

 elixir(function(mix) {
     mix.styles(['bower_components/uikit/css/uikit.almost-flat.css'], 'public/css/uikit-flat.css', './');
 });

elixir(function(mix) {
    mix.scripts([
        '/landing/common.js',
        '/landing/uikit_custom.js',
        '/landing/altair_lp_common.js'
    ], 'public/js/landing.js')
})
