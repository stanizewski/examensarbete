"use strict";

module.exports = function(grunt) {
  // Load grunt tasks automatically
  require("load-grunt-tasks")(grunt);

  // Time how long tasks take. Can help when optimizing build times
  require("time-grunt")(grunt);

  const sass = require("node-sass");

  // Configurable paths
  var config = {
    dist: "dist"
  };

  // Define the configuration for all the tasks
  grunt.initConfig({
    // Project settings
    config: config,

    // Watches files for changes and runs tasks based on the changed files
    watch: {
      sass: {
        files: ["styles/{,*/}*.{scss,sass}"],
        tasks: ["sass", "autoprefixer", "uglify"]
      },

      scripts: {
        files: ["scripts/*.js"],
        tasks: ["uglify:default"]
      }
    },

    // Compiles Sass to CSS and generates necessary files if requested
    sass: {
      options: {
        outputStyle: "compressed",
        implementation: sass
      },
      default: {
        files: [
          {
            expand: true,
            sourcemap: "none",
            cwd: "styles",
            src: ["*.scss"],
            ext: ".css"
          }
        ]
      }
    },

    // Add vendor prefixed styles
    autoprefixer: {
      options: {
        browsers: ["last 1 version"]
      },
      dist: {
        files: [
          {
            expand: true,
            // cwd: '.tmp/styles/',
            src: "{,*/}*.css"
            // dest: '.tmp/styles/'
          }
        ]
      }
    },

    uglify: {
      default: {
        mangle: false,
        options: {
          mangle: false,
          //beautify: false
          compress: false
        },

        files: {
          "scripts.js": [
            "node_modules/jquery/dist/jquery.min.js",
            "node_modules/bootstrap/dist/js/bootstrap.bundle.min.js",
            "node_modules/bootstrap/dist/js/bootstrap.min.js",
            "node_modules/aos/dist/aos.js",
            "node_modules/masonry-layout/dist/masonry.pkgd.min.js",
            "scripts/global.js"
          ]
        }
      }
    }
  });

  grunt.registerTask("default", ["sass", "autoprefixer:dist", "uglify"]);
};
