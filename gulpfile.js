const gulp = require('gulp');
const sass = require('gulp-sass');
const gcmq = require('gulp-group-css-media-queries');
const imagemin = require('gulp-imagemin');
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename");
const autoprefixer = require('gulp-autoprefixer');
const plumber = require("gulp-plumber");
const browserSync = require('browser-sync').create();

function swallowError(error) {
    console.log(error.toString());
    this.emit("end");
}
//compile scss into css
function style() {
    return gulp
    .src('css/build/*.scss')
    .pipe(sass().on('error',sass.logError))
    .pipe(gcmq())
    .pipe(autoprefixer({}))
    .pipe(gulp.dest("css/"))
    .pipe(browserSync.stream());
}

function imagemini() {
    return gulp
    .src('images/build/*')
    .pipe(
        imagemin({
          optimizationLevel: 6,
          progressive: true
        })
    )
    .pipe(gulp.dest('images'))
}

function vendorscripts() {
    return gulp
      .src("js/build/vendor/*.js")
      .pipe(concat("plugins.js"))
      .pipe(rename("plugins.min.js"))
      .pipe(uglify())
      .pipe(gulp.dest("js"));
}

function minify() {
    return gulp
      .src("js/build/custom/*.js")
      .pipe(plumber())
      .pipe(rename("scripts.min.js"))
      .pipe(gulp.dest("js"));
}

function watch() {
    browserSync.init({
        server: {
             baseDir: "./"
        }
    });
    gulp.watch('images/build/*',imagemini).on("change", browserSync.reload);
    gulp.watch('css/build/**/*.scss', style);
    gulp.watch('./*.php').on('change',browserSync.reload);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
    gulp.watch("js/build/vendor/*.js", vendorscripts).on("change", browserSync.reload);
    gulp.watch("js/build/custom/*.js", minify).on("change", browserSync.reload);
}

exports.style = style;
exports.imagemini = imagemini;
exports.vendorscripts = vendorscripts;
exports.minify = minify;
exports.watch = watch;