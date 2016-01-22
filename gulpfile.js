var gulp = require('gulp'),
  browserSync = require('browser-sync'),
  $ = require('gulp-load-plugins')(),
  debug = false,
  source = require('vinyl-source-stream'),
  buffer = require('vinyl-buffer'),
  browserify = require('browserify'),
  babelify = require('babelify'),
  assign = require('lodash.assign'),
  watchify = require('watchify'),
  precss = require('precss'),
  pxtorem = require('postcss-pxtorem'),
  autoprefixer = require('autoprefixer'),
  cssnano = require('cssnano'),
  cssmqpacker = require('css-mqpacker'),
  map = require('postcss-map');

onError = function(err) {
  $.util.beep();
  console.log(err);
  $.util.log
  this.emit('end');
};

var theme = './wp-content/themes/ginfoundry/';

//js
var customOpts = {
  entries: [theme + 'scripts/main.js'],
  debug: false
}

var opts = assign({}, watchify.args, customOpts);

var b = watchify(browserify(opts));

b.transform(babelify);

gulp.task('js', bundle);
b.on('update', bundle);
b.on('log', $.util.log);

function bundle() {
  return b.bundle()
    .on('error', $.util.log.bind($.util, 'Browserify Error'))
    .pipe(source('build.js'))
    .pipe(buffer())
    // .pipe($.uglify())
    .pipe(gulp.dest(theme + 'js/build'))
}

gulp.task('concat-lib', function() {
  return gulp.src(theme + 'js/lib/*.js')
    .pipe($.plumber({
      errorHandler: onError
    }))
    .pipe($.concat('lib.js', {
      newLine: '\n;'
    }))
    .pipe($.uglify())
    .pipe($.plumber.stop())
    .pipe(gulp.dest(theme + 'js/build'));
});

gulp.task('css', function() {
  return gulp.src(theme + 'styles/main.css')
    .pipe($.sourcemaps.init())
    .pipe($.postcss([precss,
    // pxtorem({
    //     prop_white_list: [],
    //     media_query: true
    //   }),
      autoprefixer({
        browsers: ['last 2 versions']
      }), cssmqpacker({
        sort: true
      }),
      /* cssnano({
         discardComments: {
           removeAll: true
         }
       })*/
    ]))
    .pipe($.rename('style.css'))
    .pipe($.sourcemaps.write('.'))
    .pipe(gulp.dest(theme))
});

//live reload
gulp.task('browser-sync', function() {
  browserSync({
    proxy: 'gin.dev',
    browser: 'google chrome'
  });
});

gulp.task('bs-reload', function() {
  browserSync.reload();
});


gulp.task('default', ['js', 'css', 'browser-sync'], function() {
  gulp.watch(theme + '**/*.{php,html}', ['bs-reload']);
  gulp.watch(theme + 'styles/**/*.css', ['css', 'bs-reload']);
});
