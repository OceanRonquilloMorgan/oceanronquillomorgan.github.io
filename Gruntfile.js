// Load Grunt
module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    // Tasks
    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'assets/css/stylesheet.css': 'scss/stylesheet.scss'
        }
      }
    },
    watch: {
      files: ['**/*.scss'],
      tasks: ['sass']
    }
  });

  // Load Grunt plugins
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Register Grunt tasks
  grunt.registerTask('default', ['watch']);
};
