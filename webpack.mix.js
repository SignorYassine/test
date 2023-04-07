const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
      require('postcss-import'),
      require('tailwindcss'),
      require('autoprefixer'),
   ])
   .sass('resources/sass/app.scss', 'public/css')
   .webpackConfig({
      resolve: {
         alias: {
            jquery: 'jquery/src/jquery',
            slick: 'slick-carousel/slick/slick.js'
         }
      }
   });
