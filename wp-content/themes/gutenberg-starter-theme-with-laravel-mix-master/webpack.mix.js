const mix = require('laravel-mix');

mix.js('src/js/app.js', './')
   .sass('src/sass/style.scss', './');
