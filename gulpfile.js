// Sass configuration
var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var cleancss = require('gulp-clean-css');


gulp.task('themefiles', function (cb) {
  gulp
    .src(['index.php', 'functions.php', 'footer.php', 'header.php'])
    .pipe(
      gulp.dest('./dist')
    );
  cb();
});

gulp.task('images', function (cb) {
  gulp
    .src('images/*')
    .pipe(
      gulp.dest('./dist/images')
    );
  cb();
});

gulp.task('cleanfolders', function () {
  gulp.src('./dist', {read: false})
  .pipe(clean());    
});

gulp.task('sass', function (cb) {
  gulp
    .src('sass/site.scss')
    .pipe(sass())
    .pipe(cleancss({ keepSpecialComments: "*" }))
    .pipe(rename('style.css'))
    .pipe(
      gulp.dest('./dist')
    );
  cb();
});

gulp.task(
  'default',
  gulp.series('sass', function (cb) {
    gulp.watch('sass/*.scss', gulp.series('sass'));
    cb();
  })
);

gulp.task('runwpbuild', gulp.parallel('themefiles', 'images', 'sass'), function (done) { done(); });