// Thanks to https://markgoodyear.com/2014/01/getting-started-with-gulp/
var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    notify = require('gulp-notify'),
    cssnano = require('gulp-cssnano');

gulp.task('styles', function() {
  return sass('css/style.scss', { style: 'expanded' })
    .pipe(autoprefixer('last 2 version'))
    //.pipe(gulp.dest('dist'))
    //.pipe(rename({suffix: '.min'}))
    .pipe(cssnano())
    .pipe(gulp.dest('./'))
    .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('css/**/*.scss', ['styles']);
});