module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      dist: {
        src: [
          'app/bower_components/html5-boilerplate/js/vendor/modernizr-2.6.2.min.js',
          'app/bower_components/angular/angular.js',
          'app/bower_components/angular-route/angular-route.js',
          'app/app.js',
          'app/view1/view1.js',
          'app/view2/view2.js'
        ],
        dest: 'app/<%= pkg.name %>.add.js'
      }
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
      },
      dist: {
        files: {
          'app/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
        }
      }
    },
    less: {
      debug: {
        src: 'app/app.less',
        dest: 'app/styles.css'
      }
    },
    cssmin: {
      'app/styles.css': [
        'app/styles.css'
      ]
    },
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.registerTask('default', ['concat', 'uglify', 'less', 'cssmin']);
};