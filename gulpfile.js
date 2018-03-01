var gulp = require("gulp");
var sass = require("gulp-sass");
var notify = require("gulp-notify");
var concat = require("gulp-concat");
var uglify = require("gulp-uglify");
var browserSync = require("browser-sync").create();
var del = require("del");

/* Tasks cached */
gulp.task("cache:css", function () {
    del("./assets/_css/app.min.css")
});

gulp.task("cache:js", function () {
    del("./assets/_js/scripts.min.js")
});

gulp.task("move-fonts", function () {
    return gulp.src([
        './node_modules/bootstrap/fonts/**',
        './node_modules/font-awesome/fonts/**',
        './resource/fonts/**'
    ])
        .pipe(gulp.dest("./assets/fonts"))
});

gulp.task('concat-css', ['move-fonts'], function () {
    return gulp.src([
        './resource/css/animate.css',
        './resource/css/OwlCarousel2-2.2.1/owl.carousel.min.css',
        './resource/css/OwlCarousel2-2.2.1/owl.theme.default.min.css',
        './node_modules/bootstrap/dist/css/bootstrap.css'
    ])
        .pipe(concat('vendor.css'))
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('./assets/_css'))
});


/* Task compile scss to css */
gulp.task("sass", ['cache:css'], function () {
    return gulp.src("./resource/scss/app.scss")
        .pipe(concat('app.min.css'))
        .pipe(sass({outPutStyle: 'compressed'}))
        .on('error', notify.onError({title: "erro scss", message: "<%= error.message %>"}))
        .pipe(gulp.dest("./assets/_css"))
        .pipe(browserSync.stream());
});

/* Task concat js */
gulp.task("concat-js", function () {
    return gulp.src([
        './resource/jss/bootstrap/bootstrap.min.js',
        './resource/jss/jquery.mask.js',
        './resource/jss/owl.carousel.min.js',
        './resource/jss/wow/wow.js',
        './resource/jss/scripts.js',
    ])
        .pipe(concat("scripts.min.js"))
        .pipe(gulp.dest("./assets/_js"))

});

/* Task minify js */
gulp.task("js", ['cache:js'], function () {
    return gulp.src("./resource/js/scripts.js")
        .pipe(uglify())
        .pipe(gulp.dest("./assets/_js"))
        .pipe(browserSync.stream());
});

/* Task server local */
gulp.task("server", function () {
    browserSync.init({
        proxy: "localhost:8080"
    });

    /* Watch */
    gulp.watch("./resource/scss/**/*.scss", ['sass']);
    //gulp.watch("./node_modules/bootstrap/scss/**/*.scss", ['sass']);
    gulp.watch("./resource/js/**/*.js", ['js']);
    gulp.watch("./**/*.php").on('change', browserSync.reload);;
});

gulp.task("default", ["sass", "js", "concat-css", "concat-js", "server"]);