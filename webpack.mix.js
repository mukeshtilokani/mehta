const mix = require('laravel-mix');
require('laravel-mix-purgecss');
if (!mix.inProduction()) {
    mix.webpackConfig({
            devtool: 'source-map'
        })
        .sourceMaps()
}

if (mix.inProduction()) {
    mix.version();
}

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/assets/sass/app.scss', 'public/css/app.css')
    .options({
        processCssUrls: false,
        postCss: [
            require('autoprefixer')({
                browsers: [
                    "> 1%",
                    "last 40 versions",
                    "IE 10"
                ],
                cascade: false
            })
        ]
    })
// .purgeCss();

mix.scripts([
    'resources/assets/js/src/main.js'
], 'public/js/min/main.min.js');

mix.scripts([
    'resources/assets/js/src/jquery-3.0.0.js'
], 'public/js/min/jquery-3.0.0.min.js');

mix.scripts([
    'resources/assets/js/src/ekko-lightbox.js'
], 'public/js/min/ekko-lightboxain.min.js');

mix.scripts([
    'resources/assets/js/src/contact_us.js'
], 'public/js/min/contact_us.min.js');

mix.scripts([
    'resources/assets/backend/assets/js/core/jquery.min.js',
    'resources/assets/backend/assets/js/core/bootstrap.bundle.min.js',
    'resources/assets/backend/assets/js/core/jquery.slimscroll.min.js',
    'resources/assets/backend/assets/js/core/jquery.scrollLock.min.js',
    'resources/assets/backend/assets/js/core/jquery.appear.min.js',
    'resources/assets/backend/assets/js/core/jquery.countTo.min.js',
    'resources/assets/backend/assets/js/core/js.cookie.min.js',
    'resources/assets/backend/assets/js/codebase.js',
    'resources/assets/backend/assets/js/custom.js'
], 'public/backend/assets/js/business.min.js');

mix.scripts([
    'resources/assets/backend/assets/js/custom/common.js'
], 'public/backend/assets/js/custom/common.js');

mix.copyDirectory('resources/assets/backend/assets/fonts', 'public/backend/assets/fonts');
mix.copyDirectory('resources/assets/backend/assets/js/core', 'public/backend/assets/js/core');
mix.copyDirectory('resources/assets/backend/assets/js/pages', 'public/backend/assets/js/pages');
mix.copyDirectory('resources/assets/backend/assets/js/plugins', 'public/backend/assets/js/plugins');
mix.copyDirectory('resources/assets/backend/assets/media', 'public/backend/assets/media');