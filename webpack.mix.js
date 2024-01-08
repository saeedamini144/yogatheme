const mix = require('laravel-mix');
require('laravel-mix-clean');

const resources = 'src' ;
mix.setPublicPath('./');

mix.webpackConfig({
    externals: {
        "jquery": "jQuery"
    }
});


mix.clean({
    cleanOnceBeforeBuildPatterns: [
    'dist',
  ],
});


mix.sass( `${resources}/scss/app.scss` , 'dist/css' ).sourceMaps();
mix.js( `${resources}/js/app.js` , 'dist/js' );





// if (mix.inProduction()) {
    mix.version();
// }

// mix.copyDirectory('src/fonts', 'dist/fonts');
// mix.copyDirectory('src/img', 'dist/img');
// mix.copyDirectory('src/icon', 'dist/icon');