// Include gulp
var gulp = require('gulp');
// Include deps
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');

// less Task
gulp.task('less', function() {
    return gulp.src('./resources/less/*.less')
      .pipe(less())
      .pipe(autoprefixer({
        browsers: ['last 2 versions', 'IE 8', 'IE 9'],
        cascade: false
      }))
      .pipe(concat('app.css'))
      .pipe(gulp.dest('./css'));
});

gulp.task('watch', function() {
    gulp.watch(['./resources/less/*.less'], ['less']);
});

gulp.task('default', '');
