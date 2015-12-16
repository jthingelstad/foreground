/*jshint node:true */
module.exports = function ( grunt ) {
	// var conf = grunt.file.readJSON( 'skin.json' );
	grunt.loadNpmTasks( 'grunt-contrib-jshint' );
	grunt.loadNpmTasks( 'grunt-jsonlint' );
	// grunt.loadNpmTasks( 'grunt-banana-checker' );

	grunt.initConfig( {
		jshint: {
			options: {
				jshintrc: true
			},
			all: [
				'**/*.js',
				'!node_modules/**',
				'!assets/scripts/foundation/**',
				'!assets/scripts/vendor/**'
			]
		},
		/*banana: conf.MessagesDirs,*/
		jsonlint: {
			all: [
				'**/*.json',
				'!node_modules/**'
			]
		}
	} );

	grunt.registerTask( 'test', [ 'jshint', 'jsonlint' /* 'banana' */ ] );
	grunt.registerTask( 'default', 'test' );
};
