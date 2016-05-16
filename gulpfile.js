var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del');

gulp.task('styles', function() {
    gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'app/Resources/public/scss/*.scss'])
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version'))
        .pipe(gulp.dest('web/css'))
        .pipe(rename({suffix: '.min'}))
        .pipe(cssnano())
        .pipe(gulp.dest('web/css'))
        .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('scripts', function() {
    return gulp.src('node_modules/bootstrap/dist/js/bootstrap.js')
        .pipe(concat('bootstrap.js'))
        .pipe(gulp.dest('web/js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('web/js'))
        .pipe(notify({ message: 'Scripts task complete' }));
});

gulp.task('clean', function() {
    return del(['web/css', 'web/js', 'web/images', 'web/fonts']);
});

gulp.task('default', ['clean'], function() {
    gulp.start('styles', 'scripts');
});

gulp.task('watch', function() {

    // Create LiveReload server
    livereload.listen();

    // Watch any files in dist/, reload on change
    gulp.watch(['web/**']).on('change', livereload.changed);

});
