// webpack.mix.js

let mix = require('laravel-mix');

mix.ts('wp-content/themes/sef/public/src/ts/main.ts', 'js/main.js').sourceMaps()
    .sass('wp-content/themes/sef/public/src/scss/main.scss', 'css').sourceMaps()
    .setPublicPath('dist').setResourceRoot('../')
    .browserSync({
        proxy: false,
        server: {
            baseDir: './'
        }
    });