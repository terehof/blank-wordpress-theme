var gulp = require('gulp'),
    watch = require('gulp-watch'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    uglify = require('gulp-uglify'),
    jsmin = require('gulp-jsmin'),
    util = require('gulp-util'),
    autoprefixer = require('gulp-autoprefixer'),
    cssmin = require('gulp-cssmin'),
    rename = require('gulp-rename'),
    fileInclude = require('gulp-file-include'),
    ftp = require('gulp-ftp');


var path = {
    build: {
        js: '../assets/js/',
        css: '../assets/css/'
    },
    src: {
        js: 'js/*.js',
        style: 'style/main.scss'
    },
    watch: {
        js: 'js/**/*.js',
        style: 'style/**/*.scss'
    }
};


gulp.task('js', function () {
    return gulp.src(path.src.js)
        .pipe(rigger())
        .pipe(gulp.dest(path.build.js))
        .pipe(ftp({
            host: 'ftp.example.com',
            user: 'dev@example.com',
            pass: 'pink_spoon',
            remotePath: '/wp-content/themes/theme_name/assets/js'
        }));
});
gulp.task('js-min', function () {
    return gulp.src(path.src.js)
        .pipe(rigger())
        .pipe(uglify()).on('error', util.log)
        .pipe(jsmin())
        .pipe(gulp.dest(path.build.js))
        .pipe(ftp({
            host: 'ftp.example.com',
            user: 'dev@example.com',
            pass: 'pink_spoon',
            remotePath: '/wp-content/themes/theme_name/assets/js'
        }));
});

gulp.task('styles', function () {
    return gulp.src(path.src.style)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(rename('style.css'))
        .pipe(gulp.dest(path.build.css))
        .pipe(ftp({
            host: 'ftp.example.com',
            user: 'dev@example.com',
            pass: 'pink_spoon',
            remotePath: '/wp-content/themes/theme_name/assets/css'
        }));
});
gulp.task('styles-min', function () {
    return gulp.src(path.src.style)
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['> 0.01%'],
            cascade: false
        }))
        .pipe(cssmin())
        .pipe(rename('style.css'))
        .pipe(gulp.dest(path.build.css))
        .pipe(ftp({
            host: 'ftp.example.com',
            user: 'dev@example.com',
            pass: 'pink_spoon',
            remotePath: '/wp-content/themes/theme_name/assets/css'
        }));
});




gulp.task('dev-watch', ['dev'], function () {
    watch([path.watch.style], function(event, cb) {
        gulp.start('styles');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js');
    });
});
gulp.task('prod-watch', ['prod'], function () {
    watch([path.watch.style], function(event, cb) {
        gulp.start('styles-min');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js-min');
    });
});
gulp.task('dev', ['styles', 'js']);
gulp.task('prod', ['styles-min', 'js-min']);


gulp.task('default', ['dev-watch']);