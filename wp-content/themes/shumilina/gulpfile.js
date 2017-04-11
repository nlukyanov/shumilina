var gulp = require('gulp'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	livereload = require('gulp-livereload');

function swallowError (error) {
	console.log(error.toString())
	this.emit('end')
}

gulp.task('sass', function() {
	gulp.src('style.scss')
		.pipe(sass())
		.on('error', swallowError)
		.pipe(gulp.dest(''))
		.pipe(livereload());
});

gulp.task('scripts', function() {
	return gulp.src(['node_modules/jquery/dist/jquery.min.js', 'js/libs/*.js', 'js/src/*.js'])
			.pipe(concat('main.js'))
			.pipe(uglify())
			.pipe(gulp.dest('js/'))
			.pipe(livereload());
});

gulp.task('watch', function() {
	livereload.listen();
	gulp.watch('*.scss', ['sass']);
	gulp.watch('scss/*/*.scss', ['sass']);
	gulp.watch('js/src/*.js', ['scripts']);
});

gulp.task('default', ['watch']);
