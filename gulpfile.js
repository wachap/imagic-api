var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix.sass('main.scss', 'public/css/style.css');
});

elixir(function(mix) {
    mix.scripts([
        "jquery-1.11.3.min.js",
        "custom-jquery.js",
        "app.js"
    ], 'public/js/app.js');
});
