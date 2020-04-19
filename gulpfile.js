const 	gulp 		  = require('gulp');
const	imagemin 	  = require('gulp-imagemin');
const	concat        = require('gulp-concat');
const	sass          = require('gulp-sass');
const	uglify        = require('gulp-uglify');
const	rename        = require('gulp-rename');

function styles(){
	return gulp.src('src/scss/*.*')
	.pipe(sass())
	.pipe(rename({
		suffix: '.min'
	}))
	.pipe(gulp.dest('src/css'))
}

function watchWP() {
	return gulp.src([
		'/*.php'
		])
	.pipe(gulp.dest('/*.php'))
	
}
function mainJs() {
	return gulp.src([
		'src/js/scripts.js'
		])
	.pipe(gulp.dest('src/js'))
	
}

function scripts(){
	return gulp.src([
		'src/js/scroll-out.min.js',
		'src/js/scripts.js',
		'src/js/btt-button.js',
		])	
	.pipe(concat('script.js'))
	.pipe(uglify({
		toplevel: true
	}))
	.pipe(rename({
		suffix: '.min'
	}))
	.pipe(gulp.dest('src/js'))
}

function replaceHtml() {
	return gulp.src('src/*.html')
		.pipe(gulp.dest('dist'))
}

function replacePhp() {
	return gulp.src('src/*.php')
		.pipe(gulp.dest('dist'))
}

function replaceLibs() {
	return gulp.src('src/libs/**/*.*')
		.pipe(gulp.dest('dist/libs'))
}

function replaceImagemin() {
	return gulp.src('src/images/**/*')
		.pipe(imagemin())
		.pipe(gulp.dest('dist/images'))
}

function replaceStyles() {
	return gulp.src('src/css/*.*')
	.pipe(gulp.dest('dist/css'));
}

function replaceScripts(){
	return gulp.src('src/js/script.min.js')
	.pipe(gulp.dest('dist/js'))
}

function watch(){

	gulp.watch('/*.php', watchWP);
	gulp.watch('src/scss/**/*.scss', styles);
	gulp.watch(['src/js/scroll-out.min.js', 'src/js/scripts.js', 'src/js/btt-button.js'], gulp.series(scripts));
}

gulp.task('default', watch);

gulp.task('build', gulp.series(gulp.parallel(styles,mainJs,scripts, watchWP), replaceHtml, replacePhp, replaceLibs, replaceImagemin, replaceStyles, replaceScripts));