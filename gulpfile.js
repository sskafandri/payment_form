
var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');



gulp.task('sass', function(){
    return gulp.src('app/scss/**/*.scss')
        .pipe(sass())   // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('app/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});



gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: 'app'
        },
        notify: false,
        // tunnel: true,
        // tunnel: "projectmane", //Demonstration page: http://projectmane.localtunnel.me
    });
});

gulp.task('watch',['browser-sync', 'sass'] ,function(){
    gulp.watch('app/scss/**/*.scss', ['sass']);
    gulp.watch('app/*.html', browserSync.reload);
    gulp.watch('app/js/**/*.js', browserSync.reload);
});