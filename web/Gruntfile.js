module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		uglify: {
			build: {
				src:	'js/minify.js',
				dest:	'js/minify.min.js'
			}
		},

		cssmin: {
			add_banner: {
				options: {
					banner: '/* Compiled and minified stylesheet */'
				},
				files: {
					'css/style.min.css': ['css/grid.css', 'css/skin.css']
				}
			}
		}

	});

	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.registerTask('default', ['uglify', 'cssmin']);

};