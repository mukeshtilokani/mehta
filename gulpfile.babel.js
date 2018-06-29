import gulp from 'gulp';
import autoprefixer from 'autoprefixer';
import concat from 'gulp-concat';
import uglify from 'gulp-uglify';
import rename from 'gulp-rename';
import cleanCSS from 'gulp-clean-css';
import header from 'gulp-header';
import sass from 'gulp-sass';
import postcss from 'gulp-postcss';
import connectphp from 'gulp-connect-php';
import browserSync from 'browser-sync';
import del from 'del';


////////////////////////////////////////////////////////////////////////////////////////////////
//
// SETTING UP
//
////////////////////////////////////////////////////////////////////////////////////////////////

// Get info from package.json
const pkg = require('./package.json');
const pkgName = pkg.name.toLowerCase();

// Banner to be added at the top of the files
const banner = ['/*!',
    ` * ${pkg.name} - v${pkg.version}`,
    ` * @author ${pkg.author} - http://pixelperfection.in`,
    ` * Copyright (c) ${new Date().getFullYear()}`,
    ' */',
    ''].join('\n');

// Directories and paths
const dir = {
    src: 'resources/assets/backend/',
    build: 'public/backend/',
    assets: 'assets/'
};

const path = {
    dir: {
        src: dir.src,
        build: dir.build
    },
    src: {
        assets: dir.src + dir.assets,
        scss: dir.src + dir.assets + '_scss/',
        css: dir.src + dir.assets + 'css/',
        fonts: dir.src + dir.assets + 'fonts/',
        js: dir.src + dir.assets + 'js/',
        jscore: dir.src + dir.assets + 'js/core/',
        jsplugins: dir.src + dir.assets + 'js/plugins/',
        jspages: dir.src + dir.assets + 'js/pages/',
        media: dir.src + dir.assets + 'media/'
    },
    build: {
        assets: dir.build + dir.assets,
        css: dir.build + dir.assets + 'css/',
        fonts: dir.build + dir.assets + 'fonts/',
        js: dir.build + dir.assets + 'js/',
        jsplugins: dir.build + dir.assets + 'js/plugins/',
        jspages: dir.build + dir.assets + 'js/pages/',
        media: dir.build + dir.assets + 'media/'
    }
};

// Various file sources used in tasks
const files = {
    watch: {
        // When the following files are changed the server will reload
        server: [
            path.src.css + pkgName + '.min.css',
            path.src.js + pkgName + '.js',
            path.src.jspages + '**/*.js',
            path.dir.src + '**/*.php',
            path.dir.src + '**/*.html'
        ],
        // SASS files to watch
        scss: path.src.scss + '**/*.scss'
    },
    src: {
        scss: {
            // SASS Main file
            main: path.src.scss + 'main.scss',
            // SASS Theme files
            themes: path.src.scss + pkgName + '/themes/*.scss'
        },
        css: {
            // CSS Main file
            main: path.src.css + pkgName + '.css',
            // CSS Theme files (excluding minified versions)
            themes: [
                path.src.css + 'themes/*.css',
                '!' + path.src.css + 'themes/*.min.css'
            ]
        },
        js: {
            // JS Core files to be merged together in that specific order
            coreFiles: [
                path.src.jscore + 'jquery.min.js',
                path.src.jscore + 'bootstrap.bundle.min.js',
                path.src.jscore + 'jquery.slimscroll.min.js',
                path.src.jscore + 'jquery.scrollLock.min.js',
                path.src.jscore + 'jquery.appear.min.js',
                path.src.jscore + 'jquery.countTo.min.js',
                path.src.jscore + 'js.cookie.min.js',
                path.src.js + 'codebase.js',
                path.src.js + 'custom.js'
            ],
            // JS Pages files
            pages: [
                path.src.jspages + '**/*.js'
            ]
        }
    },
    build: {
        // Files to be copied over on build task
        copy: [
            path.src.css + '**/*.min.css',
            path.src.jscore + '**/*.*',
            path.src.jsplugins + '**/*.*',
            path.src.jspages + '**/*.*',
            path.src.fonts + '**/*.*',
            path.src.media + 'avatars/**/*.*',
            path.src.media + 'favicons/**/*.*'
        ]
    }
};


////////////////////////////////////////////////////////////////////////////////////////////////
//
// SERVER Related Tasks
//
////////////////////////////////////////////////////////////////////////////////////////////////

// PHP Server with browserSync (you must install PHP and add it to your PATH to use it)
gulp.task('serve-php', () => {
    connectphp.server({
        base: path.dir.src,
        port: '4000'
    }, () => {
        browserSync({
            injectChanges: true,
            proxy: '127.0.0.1:4000',
            notify: false
        });
    });

    gulp.watch(files.watch.server).on('change', () => {
        browserSync.reload();
    });
});

// Static Web Server with browserSync
gulp.task('serve-html', () => {
    browserSync.init({
        server: {
            baseDir: path.dir.src
        },
        injectChanges: true,
        notify: false
    });

    gulp.watch(files.watch.server).on('change', () => {
        browserSync.reload();
    });
});


////////////////////////////////////////////////////////////////////////////////////////////////
//
// SASS to CSS Related Tasks
//
////////////////////////////////////////////////////////////////////////////////////////////////

// SASS to CSS task for main styles
gulp.task('css-scss-main', () => {
    return gulp.src(files.src.scss.main)
        .pipe(sass({outputStyle: 'expanded', precision: 6}).on('error', sass.logError))
        .pipe(postcss([autoprefixer()]))
        .pipe(header(banner, {pkg : pkg} ))
        .pipe(rename({basename: pkgName}))
        .pipe(gulp.dest(path.src.css));
});

// SASS to CSS task for theme styles
gulp.task('css-scss-themes', () => {
    return gulp.src(files.src.scss.themes)
        .pipe(sass({outputStyle: 'expanded', precision: 6}).on('error', sass.logError))
        .pipe(postcss([autoprefixer()]))
        .pipe(header(banner, {pkg : pkg} ))
        .pipe(gulp.dest(path.src.css + 'themes/'));
});

// Minify main CSS
gulp.task('css-min-main', () => {
    return gulp.src(files.src.css.main)
        .pipe(cleanCSS())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(path.src.css));
});

// Minify themes CSS
gulp.task('css-min-themes', () => {
    return gulp.src(files.src.css.themes)
        .pipe(cleanCSS())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(path.src.css + 'themes/'));
});


////////////////////////////////////////////////////////////////////////////////////////////////
//
// Build Related Tasks
//
////////////////////////////////////////////////////////////////////////////////////////////////

// Clean build directory and alias
gulp.task('build-clean', () => {
    return del(path.dir.build);
});
gulp.task('clean', gulp.series('build-clean'));

// Copy folders and files to build folder
gulp.task('build-copy', () => {
    return gulp.src(files.build.copy, {base: path.dir.src})
        .pipe(gulp.dest(path.dir.build));
});

// Concat/uglify core JS files into one and move it to the build folder
gulp.task('build-js-concat-core', () => {
    return gulp.src(files.src.js.coreFiles)
        .pipe(concat(pkgName + '.min.js'))
        .pipe(uglify())
        .pipe(header(banner, {pkg : pkg} ))
        .pipe(gulp.dest(path.build.js));
});


////////////////////////////////////////////////////////////////////////////////////////////////
//
// Creating Main Tasks
//
////////////////////////////////////////////////////////////////////////////////////////////////

// SASS to CSS
gulp.task('css', gulp.series(
    gulp.parallel('css-scss-main', 'css-scss-themes'),
    gulp.parallel('css-min-main', 'css-min-themes')
));

// Build task
gulp.task('build', gulp.series('css', 'build-clean', 'build-copy', 'build-js-concat-core'));


////////////////////////////////////////////////////////////////////////////////////////////////
//
// Watch Related Tasks
//
////////////////////////////////////////////////////////////////////////////////////////////////

// Watch task for SASS files
gulp.task('watch-scss', () => {
    return gulp.watch(files.watch.scss, gulp.series('css'));
});

// Watch task for all files
gulp.task('watch', gulp.parallel('watch-scss'));


////////////////////////////////////////////////////////////////////////////////////////////////
//
// Run Related Tasks
//
////////////////////////////////////////////////////////////////////////////////////////////////

// HTML Server and Watch files
gulp.task('run-html', gulp.parallel('serve-html', 'watch'));

// PHP Server and Watch files
gulp.task('run-php', gulp.parallel('serve-php', 'watch'));

// Default task
gulp.task('default', gulp.series('watch'));
