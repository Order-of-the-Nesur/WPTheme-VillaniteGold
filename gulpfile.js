// Sass configuration
var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var cleancss = require('gulp-clean-css');

gulp.task('sass', function(cb) {
  gulp
    .src('sass/site.scss')
    .pipe(sass())
    .pipe(cleancss({keepSpecialComments: "*"}))
    .pipe(rename('style.css'))  
    .pipe(
      gulp.dest('./')
    );
  cb();
});

gulp.task(
  'default',
  gulp.series('sass', function(cb) {
    gulp.watch('sass/*.scss', gulp.series('sass'));
    cb();
  })
);