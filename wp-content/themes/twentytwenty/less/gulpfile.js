var gulp = require('gulp');
var gulpless = require('gulp-less');
var gulpautoprefixer = require('gulp-autoprefixer');
var watch = require('gulp-watch');
//
//   gulp.task('styles',function(){
//           var srcfile = './src/styles.less';
//              return gulp
//                      .src(srcfile)
//                      .pipe(gulpless())
//                      .pipe(gulpautoprefixer({browsers: ['last 2 versions','>5%']}))
//                      .pipe(gulp.dest("./css/"));
//   });
//
// gulp.task('watch', function() {
//     gulp.watch('src/*.less', ['less'])
// });

gulp.task('less', function() {
    return gulp
        .src('./src/*.less')
        .pipe(gulpless())
        .pipe(gulpautoprefixer({browsers: ['last 2 versions','>5%']}))
        .pipe(gulp.dest("./css/"));
});

gulp.task('watch', function() {
    return gulp
        .watch("./src/*.less", gulp.series("less"))
});