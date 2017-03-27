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
        src: [
          'bower_components/jquery/dist/jquery.js',
          'bower_components/prism/components/prism-core.js',
          'bower_components/prism/components/prism-markup.js',
          'bower_components/prism/components/prism-css.js',
          'bower_components/prism/components/prism-clike.js',
          'bower_components/prism/components/prism-javascript.js',
          'bower_components/prism/components/prism-json.js',
          'bower_components/prism/components/prism-git.js',
          'bower_components/prism/components/prism-php.js',
          'bower_components/prism/components/prism-powershell.js',
          'bower_components/prism/components/prism-python.js',
          'bower_components/prism/components/prism-ruby.js',
          'bower_components/prism/components/prism-sass.js',
          'bower_components/prism/components/prism-scss.js',
          'javascripts/main.js'],
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

    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          'css/styles.css': 'sass/styles.scss',
          'css/font-awesome.css': 'bower_components/fontawesome/scss/font-awesome.scss'
        }
      }
    },

    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'css/styles.min.css': [
            'style.css',
            'css/styles.css',
            'css/font-awesome.css',
            'bower_components/prism/themes/prism.css'
          ]
        }
      }
    },

    watch: {
      src: {
        // files to watch for change
        files: [
          'Gruntfile.js',
          'javascripts/*.js',
          'sass/*.scss',
        ],
        // tasks to perform if change occur
        tasks: [
          'concat',
          'uglify',
          'sass',
          'cssmin'
        ]
      }
    }
  });

  // These plugins provide necessary tasks
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task
  grunt.registerTask('default', ['concat', 'uglify']);

};
