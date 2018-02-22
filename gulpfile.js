// include gulp
var gulp = require('gulp');

// include plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');


// gulp tasks

gulp.task('lint', function() {
    return gulp.src('wp-content/themes/Bs-Design/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
});

gulp.task('sass', function(){
    return gulp.src('wp-content/themes/Bs-Design/styles/scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('wp-content/themes/Bs-Design/styles/css'));
});

gulp.task('scripts',function() {
    return gulp.src('wp-content/themes/Bs-Design/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('wp-content/themes/Bs-Design/js'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('wp-content/themes/Bs-Design/js'))
});

gulp.task('watch', function() {
    gulp.watch('wp-content/themes/Bs-Design/js/*.js', ['lint', 'scripts']);
    gulp.watch('wp-content/themes/Bs-Design/styles/scss/*.css', ['sass'])
});

gulp.task('default', ['lint', 'sass', 'scripts', 'watch']);

