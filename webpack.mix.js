const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/styles.scss','public/css')
    .sass('resources/scss/home.scss','public/css')
    .sass('resources/scss/introduction.scss','public/css')
    .sass('resources/scss/management.scss','public/css')
    .sass('resources/scss/humanresource.scss','public/css')
    .sass('resources/scss/mission.scss','public/css')
    .sass('resources/scss/messageprincipal.scss','public/css')
    .sass('resources/scss/messageexecutive.scss','public/css')
    .sass('resources/scss/montessori.scss','public/css')
    .sass('resources/scss/rhedonsecondary.scss','public/css')
    .sass('resources/scss/rhedonplus2.scss','public/css')
    .sass('resources/scss/rhedonbbs.scss','public/css')
    .sass('resources/scss/services.scss','public/css')
    .sass('resources/scss/schooladmission.scss','public/css')
    .sass('resources/scss/nebadmission.scss','public/css')
    .sass('resources/scss/bbsadmission.scss','public/css')
    .sass('resources/scss/contactsection.scss','public/css')


    ;
