gulp =  require('gulp')
$ =     require('gulp-load-plugins')()

var path_css    = 'css/';
var path_scss   = 'css/';

gulp.task('sass', function(){
    gulp.src(path_scss + '*.scss')
    .pipe($.sass())
    .on('error', gutil.log)
    .pipe(gulp.dest(path_css));
})


gulp.task('default', function(){
    gulp.watch(path_scss + '*.scss', ['sass'])
})