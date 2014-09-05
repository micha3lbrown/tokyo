var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    connect = require('gulp-connect');

gulp.task('connect', function() {
   connect.server({
    root: 'app/webroot',
    livereload: true
  });
});

gulp.task('html', function () {
  gulp.src('app/webroot/*.html')
    .pipe(connect.reload());
});

gulp.task('haml', function () {
    gulp.src('app/View/Pages/*.haml')
        .pipe(haml())
        .pipe(gulp.dest('app/View/Pages/'));
});

gulp.task('styles', function() {
  return gulp.src('app/webroot/css/scss/*.scss')
    .pipe(sass({style: 'expanded' }))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(gulp.dest('app/webroot/css/'))
    .pipe(notify({ message: 'Styles Task Completes!'}));
    
});

gulp.task('stylesMin', function () {
    return gulp.src('app/webroot/css/scss/*.scss')
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('app/webroot/css/min'))
    .pipe(notify({ message: 'Styles Min task complete' }));
})

gulp.task('clean', function() {
  return gulp.src(['app/webroot/css', 'app/webroot/js', 'app/webroot/img'], {read: false})
    .pipe(clean());
});

gulp.task('watch', function() {

    // Watch .scss files
    gulp.watch('app/webroot/css/**/*.scss', ['styles']);

    // Watch .js files
    //gulp.watch('app/webroot/js/**/*.js', ['scripts']);

    // // Watch image files
    // gulp.watch('app/webroot/img/**/*', ['images']);

    // //Watch View Files
    // gulp.watch('app/view/**/*', ['haml']);

    // //Watch HTML Files
    // gulp.watch(['app/view/**/*.html'], ['html']);

});





// gulp.task('styles', function() {
//   return gulp.src('assets/stylesheets/*.scss')
//     .pipe(sass({ style: 'expanded' }))
//     .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
//     .pipe(gulp.dest('assets/stylesheets'))
//     .pipe(rename({suffix: '.min'}))
//     .pipe(minifycss())
//     .pipe(gulp.dest('assets/stylesheets/min'))
//     .pipe(notify({ message: 'Styles task complete' }));
// });

// ,gulp-sass, gulp-autoprefixer, gulp-minify, gulp-uglify, gulp-imagemin, gulp-rename, gulp-clean, gulp-concat, gulp-notify, gulp-cache, gulp-livereload, gulp-ruby, gulp-haml, gulp-connect