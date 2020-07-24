"use strict";

var gulp = require('gulp'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
  rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	 del = require('del'),
	 autoprefixer = require('gulp-autoprefixer'),
	 browserSync = require('browser-sync').create(),
	 htmlreplace = require('gulp-html-replace'),
	 cssmin = require('gulp-cssmin');

gulp.task("concatScripts", function() {
	return gulp.src([
		'assets/js/vendor/jquery-3.2.1.slim.min.js',
		'assets/js/vendor/popper.min.js',
		'assets/js/vendor/bootstrap-grid.min.js',
		'assets/js/functions.js'
		])
	.pipe(concat('main.js'))
	.pipe(gulp.dest('assets/js'))
	.pipe(browserSync.stream());
});

gulp.task("minifyScripts", ["concatScripts"], function() {
  return gulp.src("assets/js/main.js")
	.pipe(uglify())
	.pipe(rename('main.min.js'))
	.pipe(gulp.dest('dist/assets/js'));
});

gulp.task('compileSass', function() {
  return gulp.src("assets/css/main.scss")
	  .pipe(sass().on('error', sass.logError))
	  .pipe(autoprefixer())
	  .pipe(gulp.dest('assets/css'))
	  .pipe(browserSync.stream());
});

gulp.task("minifyCss", ["compileSass"], function() {
  return gulp.src("assets/css/main.css")
	.pipe(cssmin())
	.pipe(rename('main.min.css'))
	.pipe(gulp.dest('dist/assets/css'));
});

gulp.task('watchFiles', function() {
  gulp.watch('assets/css/**/*.scss', ['compileSass']);
  gulp.watch('assets/js/*.js', ['concatScripts']);
})

gulp.task('clean', function() {
  del(['dist', 'assets/css/main.css*', 'assets/js/main*.js*']);
});

gulp.task('renameSources', function() {
  return gulp.src('index.html')
	.pipe(htmlreplace({
		'js': 'assets/js/main.min.js',
		'css': 'assets/css/main.min.css'
	}))
	.pipe(gulp.dest('dist/'));
});

gulp.task("build", ['minifyScripts', 'minifyCss'], function() {
  return gulp.src(['*.html', 'favicon.ico',
				   "assets/img/**", "assets/fonts/**"], { base: './'})
			.pipe(gulp.dest('dist'));
});

gulp.task('serve', ['watchFiles'], function(){
  browserSync.init({
		proxy: "localhost/clients/bemender/"
	});

	gulp.watch("assets/css/**/*.scss", ['watchFiles']);
	gulp.watch("*.php").on('change', browserSync.reload);
	gulp.watch("*/*.php").on('change', browserSync.reload);
});

gulp.task("default", ["clean", 'build'], function() {
  gulp.start('renameSources');
});
