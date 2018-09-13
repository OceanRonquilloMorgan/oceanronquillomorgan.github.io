// Access to Sass without Ruby
const sass = require('node-sass');

// Load Grunt
module.exports = function(grunt) {
  grunt.initConfig({
    sass: {
      options: {
        implementation: sass,
        sourceMap: true
      },
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'assets/css/stylesheet.css': 'sass/stylesheet.scss'
        }
      }
    },
    watch: {
      files: ['**/*.scss'],
      tasks: ['sass']
    },
    uglify: {
      my_target: {
        files: {
          'assets/js/index.min.js': ['assets/js/index.js']
        }
      }
    }
  });

  // Load Grunt plugins
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Register Grunt tasks
  grunt.registerTask('default', ['watch']);
  grunt.registerTask('all', ['sass', 'uglify']);
};
