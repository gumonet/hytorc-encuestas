const gulp      = require( 'gulp' );
const sass      = require('gulp-sass')(require('sass'));
const minify    = require( 'gulp-minify' );
const concat    = require( 'gulp-concat' );
sass.compiler   = require( 'node-sass' );
const webserver = require( 'gulp-webserver' );

gulp.task(
	'webserver',
	function() {
		gulp.src( './' )
			.pipe(
				webserver(
					{
						fallback: 'index.html',
						livereload: true,
						port: 8080,
						directoryListing: {
							enable: false,
							path: './'
						},
						open: true,
					}
				)
			);
	}
);

gulp.task('sass', function() {
	return gulp.src('./build/sass/main.scss')
		.pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(gulp.dest('./assets/css/'));
});


gulp.task('js', function() {
	gulp.src([
		//'./node_modules/bootstrap/dist/js/bootstrap.bundle.js',
		'./build/js/main.js'
	])
		.pipe(concat('main.js'))
		.pipe(minify())
		.pipe(gulp.dest('./assets/js/'))
});


//Fonts
/*gulp.task('fonts', function() {
	gulp.src([
		'build/webfonts/*'
	])
		.pipe(gulp.dest('assets/webfonts/'));
});*/

// Images
gulp.task('images', function() {
	gulp.src([
		'./build/img/**',
	])
		.pipe(gulp.dest('assets/img/'));
});

gulp.task('watch', () => {
	gulp.watch(['./build/scss/*.scss', './build/img/**', './build/js/**'], (done) => {
		gulp.series(['run'])(done);
	});
});

gulp.task('run', gulp.parallel('sass', 'js', 'images','watch'));