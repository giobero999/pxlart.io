var gulp = require('gulp');
var size = require('gulp-filesize');
var pug = require('gulp-pug');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');
var csso = require('gulp-csso');
var newer = require('gulp-newer');
var php = require('gulp-connect-php');
var browserSync = require('browser-sync').create();

gulp.task('serve',[ 'css', 'php' ], function() {
  browserSync.init({
    proxy: '127.0.0.1:8010',
    port: 8010,
    open: true,
    notify: true
  });
});

gulp.task('php', function() {
    php.server({ base: './', port: 8010, keepalive: true});
});

gulp.task('html', function(){
  return gulp.src('src/*.html')
    .pipe(gulp.dest('build/'))
    .pipe(plumber())
    .pipe(size())
    .pipe(browserSync.reload({stream: true}))
});

gulp.task('css', function(){
  return gulp.src('build/css/*.css')
    .pipe(gulp.dest('build/css/'))
    .pipe(size())
    .pipe(browserSync.reload({ stream: true }))
});

gulp.task('js', function() {
  return gulp.src(['./src/js/*.js'])
    .pipe(plumber())
    .pipe(uglify())
    .pipe(size())
    .pipe(newer('./build/js/'))
    .pipe(gulp.dest('./build/js/'))
    .pipe(browserSync.reload({stream: true}))
});

gulp.task('scss', function () {
  return gulp.src('./src/sass/main.sass')
    .pipe(plumber())
    .pipe(sass().on('error', sass.logError))
    .pipe(csso({
            restructure: false,
            sourceMap: true,
            debug: true
        }))
    .pipe(size())
    .pipe(gulp.dest('./build/css/'))
    .pipe(browserSync.reload({stream: true}))
});

gulp.task('watch', function() {
  gulp.watch('./src/sass/**/*.*', ['scss']);
  gulp.watch('./src/js/*.js', ['js']);
  gulp.watch('./build/css/*.css', ['css']);
  gulp.watch('./build/*.html', ['html']).on('change', browserSync.reload);
  gulp.watch(['./build/**/*.php']).on('change', browserSync.reload);
});

gulp.task('default', [ 'watch', 'serve', ]);
