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
     mix.less('landing/main.less', 'public/css/landing/main.css');
 });

elixir(function(mix) {
     mix.less('dashboard/main.less', 'public/css/dashboard/main.css');
 });

 elixir(function(mix) {
     mix.styles(['bower_components/uikit/css/uikit.almost-flat.css'], 'public/css/uikit-flat.css', './');
 });

//Bundle for landing page
elixir(function(mix) {
    mix.scripts([
        '/landing/common.js',
        '/landing/uikit_custom.js',
        '/landing/altair_lp_common.js'
    ], 'public/js/landing/landing.js')
})


elixir(function(mix) {
    mix.scripts([
        '/dashboard/common.js',
        '/dashboard/uikit_custom.js',
        '/dashboard/altair_admin_common.js',
        '/dashboard/kendoui_custom.js',
        '/dashboard/custom/uikit_beforeready.js'
    ], 'public/js/dashboard/dashboard.js')
})
