const mix = require('laravel-mix');
require('mix-tailwindcss');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
     require('tailwindcss'),
   ]);
