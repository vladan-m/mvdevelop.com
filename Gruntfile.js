module.exports = function(grunt) {

  // Project configuration
  grunt.initConfig({

    // Metadata
    pkg: grunt.file.readJSON('package.json'),
    banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
      '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
      '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
      '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
      ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',

    // Tasks configuration
    concat: {
      options: {
        banner: '<%= banner %>',
        separator: ';'
      },
      dist: {
        // files to concatenate
        src: ['javascripts/jquery.js', 'javascripts/easing.js', 'javascripts/bootstrap-collapse.js', 'javascripts/bootstrap-transition.js', 'javascripts/bxslider.js', 'javascripts/validate.js', 'javascripts/mv-develop.js'],
        // location of the resulting JS file
        dest: 'javascripts/app.js'
      }
    },

    uglify: {
      options: {
        banner: '<%= banner %>'
      },
      dist: {
        // file to uglify
        src: '<%= concat.dist.dest %>',
        // uglified file
        dest: 'javascripts/app.min.js'
      }
    },

    watch: {
      src: {
        // files to watch for change
        files: ['javascripts/app.js', 'javascripts/mv-develop.js'],
        // tasks to perform if change occur
        tasks: ['concat', 'uglify']
      }
    }
  });

  // These plugins provide necessary tasks
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task
  grunt.registerTask('default', ['concat', 'uglify']);

};
