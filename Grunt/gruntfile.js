module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');

  grunt.initConfig({
    uglify: {
      my_target: {
        files: {
          '../public/js/script.js': ['../public/_/js/*.js']
        } //files
      } //my_target
    }, //uglify
    compass: {
      dev: {
        options: {
          config: 'config.rb'
        } //options
      } //dev
    }, //compass
    watch: {
      options: { livereload: false },
      scripts: {
        files: ['../public/_/js/*.js'],
        tasks: ['uglify']
      }, //script
      sass: {
        files: ['../public/_/sass/*.scss'],
        tasks: ['compass:dev']
      }, //sass
    } //watch
  }) //initConfig
  grunt.registerTask('default', 'watch');
} //exports
