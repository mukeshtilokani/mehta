/**
 *
 * The packages we are using
 *
 **/
var browserSync = require('browser-sync');
var del = require('del');
var favicons = require('gulp-favicons');
var gulp = require('gulp');
var gutil = require('gulp-util');
var imagemin = require("gulp-imagemin");
var inject = require('gulp-inject');
var plumber = require('gulp-plumber');
var pngquant = require('imagemin-pngquant');
var prefix = require('gulp-autoprefixer');
var pump = require('pump');
// var realFavicon = require('gulp-real-favicon');
var rename = require("gulp-rename");
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');

var pkg = require('./package.json');
var fs = require('fs');

var GlobalPaths = {
    Assets: 'resources/assets/',
    Public: 'public/',
    Views: 'resources/views/'
};

var paths = {
    sass: GlobalPaths.Assets + 'sass',
    js: GlobalPaths.Assets + 'js/src',
    images: GlobalPaths.Public + 'img',
    buildCss: GlobalPaths.Public + 'css',
    buildJs: GlobalPaths.Public + 'js'
};

/**
 *
 * Styles
 * - Compile
 * - Compress/Minify
 * - Catch errors (gulp-plumber)
 * - Autoprefixer
 *
 **/

// For Development
gulp.task('sass', function() {
    gulp.src(paths.sass + '/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(prefix('last 40 versions', '> 1%', 'ie 8', 'Android 2', 'Firefox ESR'))
        .pipe(plumber.stop())
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest(paths.buildCss));
});

/**
 * Remove the generated map files.
 */
gulp.task('clean-maps', function() {
    return del(GlobalPaths.Public + 'maps');
});

// For Production
gulp.task('sass-pro', ['clean-maps'], function() {
    gulp.src(paths.sass + '/**/*.scss')
        .pipe(plumber())
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(prefix('last 40 versions', '> 1%', 'ie 8', 'Android 2', 'Firefox ESR'))
        .pipe(plumber.stop())
        .pipe(gulp.dest(paths.buildCss));
});

/**
 *
 * Only Works with your system if Ruby is installed
 * The bad news: you must install the scss_lint gem as follows:
 * - gem install scss_lint
 * In order to tell the linter how it should work,
 * you must create a scss-lint.yml file
 * in the same folder as the gulpfile.js.
 * This file will contain all rules needed for your project.
 *
 **/
gulp.task('scsslint', function() {
    return gulp.src(paths.sass + '/**/*.scss')
        .pipe(scsslint());
});

/**
 *
 * BrowserSync.io
 * - Watch CSS, JS & HTML for changes
 * - View project at: localhost:3000
 *
 **/
gulp.task('browser-sync', function() {
    browserSync.init([
        paths.sass + '/**/*.scss',
        paths.js + '/**/*.js',
        GlobalPaths.Views + '**/*.blade.php'
    ], {
        proxy: {
            target: "http://mehta.local:8888"
        },
        ghostMode: {
            clicks: true,
            forms: true,
            scroll: false
        },
        notify: false
    });
});


/**
 *
 * Javascript
 * - Uglify
 *
 **/
gulp.task('scripts', function() {
    gulp.src(paths.js + '/**/*.js')
        .pipe(uglify())
        .pipe(rename({
            dirname: "min",
            suffix: ".min",
        }))
        .pipe(gulp.dest(paths.buildJs))
});

gulp.task('compress', function(cb) {
    pump([
            gulp.src(paths.js + '/**/*.js'),
            uglify(),
            rename({
                dirname: "min",
                suffix: ".min",
            }),
            gulp.dest(paths.buildJs)
        ],
        cb
    );
});

/**
 *
 * Images
 * - Compress them!
 *
 **/
gulp.task('images', function() {
    return gulp.src(paths.images + '/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            use: [pngquant()]
        }))
        .pipe(gulp.dest(paths.images));
});

var config = {
    appName: pkg.name,
    appDescription: pkg.description,
    url: 'https:aecordigital.com',
    version: 1.0,
    developerName: pkg.author,
    developerURL: 'http://parthshah.xyz',
    background: '#46A6DB',
    path: paths.images + '/favicons'
};

/**
 * Remove the generated favicon files.
 */
gulp.task('clean', function() {
    return del([config.path]);
});

/**
 * Generates favicon files used by various browsers and OS's.
 * Requires the `clean` task to run first.
 * For creating a Material Design icon, I recommend using
 * https://romannurik.github.io/AndroidAssetStudio/icons-launcher.html
 */
gulp.task('favicon-generate', ['clean'], function() {
    return gulp.src(paths.images + '/logos/favicon.png').pipe(favicons({
            appName: config.appName,
            appDescription: config.appDescription,
            url: config.url,
            version: config.version,
            developerName: config.developerName,
            developerURL: config.developerURL,
            background: config.background,
            path: '/' + 'img/favicons',
            display: 'standalone',
            orientation: 'portrait',
            start_url: '/?homescreen=1',
            logging: false,
            online: false,
            html: '../favicon.html',
            pipeHTML: true,
            replace: true
        }))
        .on('error', gutil.log)
        .pipe(gulp.dest(config.path));
});

/**
 * Inject the generated `favicon.html` into `index.html`.
 * Requires the `favicon-generate` task to run first.
 */
gulp.task('inject-favicon', ['favicon-generate'], function() {
    gulp.src(GlobalPaths.Views + 'includes/frontend/partials/favicon.blade.php')
        .pipe(inject(gulp.src([paths.images + '/favicon.html']), {
            starttag: '<!-- inject:head:{{ext}} -->',
            transform: function(filePath, file) {
                return file.contents.toString('utf8');
                // return file contents as string
            }
        }))
        .pipe(gulp.dest(GlobalPaths.Views + 'includes/frontend/partials'));
});

/**
 * Remove the generated favicon.html file.
 * Requires the `inject-favicon` task to run first.
 */
gulp.task('clean-favicon', ['inject-favicon'], function() {
    return del([paths.images + '/favicon.html']);
});



/**
 *
 * Development task
 * - Runs sass and compress tasks
 * - Watchs for file changes for compress and sass/css
 *
 **/
gulp.task('dev', ['sass', 'compress'], function() {
    gulp.watch(paths.sass + '/**/*.scss', ['sass']);
    gulp.watch(paths.js + '/**/*.js', ['compress']);
});

/**
 *
 * Default task
 * - Runs sass, browser-sync and compress tasks
 * - Watchs for file changes for compress and sass/css
 *
 **/
gulp.task('default', ['dev', 'browser-sync'], function() {
});

/**
 *
 * Production task
 * - Runs sass, compress and image tasks
 * - Watchs for file changes for images, compress and sass/css
 *
 **/
gulp.task('prod', ['sass-pro', 'compress'], function() {});

/**
 *
 * Default Production
 * - Runs sass, browser-sync, compress and image tasks
 * - Watchs for file changes for images, compress and sass/css
 *
 **/
gulp.task('prod-all', ['sass-pro', 'compress', 'images'], function() {});