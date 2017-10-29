var gulp = require('gulp'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    pngquant = require('imagemin-pngquant'),
    jsmin = require('gulp-jsmin'),
    rename = require('gulp-rename');

var settings = {
    srcFolder: 'resources/assets/',
    assetsFolder: 'public/'
};

gulp.task('minify-js', function () {
    gulp.src(settings.srcFolder + 'js/main.js')
        .pipe(jsmin())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(settings.assetsFolder + 'js/'));
});

gulp.task('compile-sass', function () {
    gulp.src([settings.srcFolder + 'sass/*'])
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(settings.assetsFolder + 'css/'))
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(settings.assetsFolder + 'css/'));
});

gulp.task('copy-js', function () {
    gulp.src(settings.srcFolder + 'js/main.js')
        .pipe(gulp.dest(settings.assetsFolder + 'js/'))

});

gulp.task('copy-fonts', function () {
    gulp.src(settings.srcFolder + 'fonts/**/*')
        .pipe(gulp.dest(settings.assetsFolder + 'fonts/'));
});

gulp.task('copy-img', function() {
    gulp.src(settings.srcFolder + 'img/*')
        .pipe(gulp.dest(settings.assetsFolder + 'img/'));
});

// UNCOMMENT MINIFY JS WHEN PRODUCTION READY

gulp.task('default', ['compile-sass', 'minify-js', 'copy-js', 'copy-fonts', 'copy-img'], function () {

    gulp.watch(settings.srcFolder + 'js/*', ['minify-js']);
    gulp.watch(settings.srcFolder + 'js/*', ['copy-js']);
    gulp.watch(settings.srcFolder + 'sass/**/*', ['compile-sass']);
    gulp.watch(settings.srcFolder + 'fonts/**/*', ['copy-fonts']);
    gulp.watch(settings.srcFolder + 'img/*', ['copy-img']);

});