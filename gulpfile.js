var gulp = require('gulp');
var $    = require('gulp-load-plugins')();

//browserSync
var browserSync  = require('browser-sync');
var reload = browserSync.reload;

var sassPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('css'));
});

//browserSync
gulp.task('browser-sync', function(){
  var archivos = [
  './style.css',
  './*.php',
  './template-parts/*.php',
  './inc/*.php',
  './js/*.js',
  './css/app.css'
  ];

  //Inicializar BrowserSync
  browserSync.init(archivos, {
    proxy:'http://localhost:8888/unireformada/',
    notify: false
  })
});

gulp.task('default', ['sass', 'browser-sync'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
});
