gulp            = require('gulp');
$               = require('gulp-load-plugins')();

browserSync     = require('browser-sync').create();

var path = {
    css     : 'css/',
    scss    : 'css/'
}

gulp.task('browser_reload', function(done) {
    browserSync.reload();
    console.log('Restarted');
    done();
});

gulp.task('sass_compilation_+_prefixer', function(){
    gulp.src(path.scss + '*.scss')
    .pipe($.sass().on('error', $.sass.logError))
    .pipe($.autoprefixer({
        browsers: ['last 2 versions']
    }))
    .pipe(gulp.dest(path.css));
})


gulp.task('default', function(){
    browserSync.init({
        proxy: "localhost:8080/Projets/testWeb/WS"
    });

    gulp.watch(path.scss + '**/*.scss', ['sass_compilation_+_prefixer']);

    gulp.watch(['*.html', 'js/*.js', '*.php', 'css/*.css'], ['browser_reload']);
})