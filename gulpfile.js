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
elixir(function (mix) {
    mix
    .copy('bower/jquery/dist/jquery.min.js', 'public/assets/plugins/jquery/jquery.min.js')

    .copy('bower/bootstrap/dist/js/bootstrap.min.js', 'public/assets/plugins/bootstrap/js/bootstrap.min.js')
    .copy('bower/bootstrap/dist/css/bootstrap.min.css', 'public/assets/plugins/bootstrap/css/bootstrap.min.css')
    .copy('bower/bootstrap/dist/fonts/', 'public/assets/plugins/bootstrap/fonts/')

    .copy('bower/font-awesome/css/font-awesome.min.css', 'public/assets/plugins/font-awesome/css/font-awesome.min.css')
    .copy('bower/font-awesome/fonts/', 'public/assets/plugins/font-awesome/fonts/')

    .copy('bower/jquery.steps/demo/css/jquery.steps.css', 'public/assets/plugins/jquery.steps/css/jquery.steps.css')
    .copy('bower/jquery.steps/build/jquery.steps.min.js', 'public/assets/plugins/jquery.steps/js/jquery.steps.min.js')

    .copy('bower/formvalidation.io/vendor/formvalidation', 'public/assets/plugins/formvalidation')

    .sass([
        'website.scss'
    ], 'public/assets/website/css/website.min.css');
});
