/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    /*
    jshint: {
      all: {
        src: 'javascripts/mv-develop.js',
        options: {
          curly: true,
          eqeqeq: true,
          immed: true,
          latedef: true,
          newcap: true,
          noarg: true,
          sub: true,
          undef: true,
          unused: true,
          boss: true,
          eqnull: true,
          browser: true,
          globals: {
            jQuery: true
          }
        }
      }
    },
    */
    uglify: {
      all: {
        files: {
          'javascripts/mv-develop.minimize.js': 'javascripts/mv-develop.js'
        }
      }
    },
    watch: {
      uglify: {
        files: 'javascripts/mv-develop.js',
        tasks: ['uglify']
      }
    }
  });

  // These plugins provide necessary tasks.
  //grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task.
  grunt.registerTask('default', ['uglify']);

};
