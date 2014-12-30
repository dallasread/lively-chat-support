module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),
		concat: {
			php: {
				files: {
					"admin/php/structure.php": ["admin/php/includes/base.php", "admin/php/includes/**/*.php"]
				}
			}
		},
		coffee: {
			compileJoined: {
				options: {
					join: true
				},
				files: {
					"admin/js/script.js": ["admin/coffeescript/*.coffee"],
					"public/js/script.js": ["public/coffeescript/*.coffee"]
				}
	    }
	  },
		sass: {
	    dist: {
	      files: {
					"admin/css/style.css": ["admin/scss/main.scss"],
					"public/css/style.css": ["public/scss/main.scss"],
	      }
	    }
	  },
    uglify: {
      js: {
				options: {
					banner: "/*! <%= pkg.name %> <%= pkg.version %> compiled on <%= grunt.template.today('yyyy-mm-dd') %> */\n",
				},
				files: {
					"admin/js/script.min.js": ["admin/js/vendor/*.js", "admin/js/script.js"],
					"public/js/script.min.js": ["public/js/vendor/*.js", "public/js/script.js"]
				}
      }
    },
		cssmin: {
		  css: {
				options: {
					banner: "/*! <%= pkg.name %> <%= pkg.version %> compiled on <%= grunt.template.today('yyyy-mm-dd') %> */\n",
				},
				files: {
					"admin/css/style.min.css": ["admin/css/vendor/*.css", "admin/css/style.css"],
					"public/css/style.min.css": ["public/css/style.css"]
				}
		  }
		},
		watch: {
		  js: {
		    files: ["admin/coffeescript/*.coffee", "public/coffeescript/*.coffee"],
		    tasks: ["coffee", "uglify"]
		  },
		  css: {
		    files: ["admin/scss/*.scss", "public/scss/*.scss", "admin/css/vendor/*.css"],
		    tasks: ["sass", "cssmin"]
		  },
			php: {
				files: ["admin/php/includes/**/*.php"],
				tasks: ["concat"]
			}
		}
  });

  grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks("grunt-contrib-coffee");
	grunt.loadNpmTasks("grunt-contrib-watch");
	grunt.loadNpmTasks("grunt-contrib-sass");
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-concat');
	
	grunt.registerTask("default", ["concat", "coffee", "sass", "uglify"]);

};