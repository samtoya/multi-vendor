gulp = require 'gulp'
server = require 'gulp-server-livereload'
connect = require 'gulp-connect'

gulp.task 'webserver', ->
	gulp.src 'multi-vendor'
		.pipe server
		 livereload: true
		 directoryListing: true
		 open: true
	return

gulp.task 'default', ['webserver']

