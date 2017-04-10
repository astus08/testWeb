gulp            = require('gulp');
$               = require('gulp-load-plugins')();

browserSync     = require('browser-sync').create();

var path_css    = 'css/';
var path_scss   = 'css/';

gulp.task('browserReload', function() {
    browserSync.reload();
    done();
});

gulp.task('sass', function(){
    gulp.src(path_scss + '*.scss')
    .pipe($.sass().on('error', $.sass.logError))
    .pipe($.autoprefixer({
        browsers: ['last 2 versions']
    }))
    .pipe(gulp.dest(path_css));
})


gulp.task('default', function(){
    browserSync.init({
        proxy: "localhost:8080/projets/testWeb/test2"
    });

    gulp.watch(path_scss + '**/*.scss', ['sass'])

    gulp.watch("*.html", ['browserReload']);
})