'use strict';
module.exports = function(grunt) {

    grunt.initConfig({

        // Live Reload
        livereload: {
        },

        // let us know if our JS is sound
        jshint: {
            options: {
                "bitwise": true,
                "browser": true,
                "curly": true,
                "eqeqeq": true,
                "eqnull": true,
                "es5": true,
                "esnext": true,
                "immed": true,
                "jquery": true,
                "latedef": true,
                "newcap": true,
                "noarg": true,
                "node": true,
                "strict": false,
                "trailing": true,
                "undef": true,
                "globals": {
                    "jQuery": true,
                    "alert": true
                }
            }
        },

        // concatenation and minification all in one
        uglify: {
            dist: {
                files: {
                    'js/plugins.min.js': [
                        'js/source/plugins.js'
                    ],
                    'js/main.min.js': [
                        'js/source/main.js'
                    ]
                }
            }
        },

        // style (Sass) compilation via Compass
        compass: {
            dist: {
                options: {
                    sassDir: 'scss',
                    cssDir: '../',
                    imagesDir: 'images',
                    images: 'images',
                    javascriptsDir: 'js',
                    fontsDir: 'fonts',
                    environment: 'production',
                    outputStyle: 'compressed',
                    relativeAssets: true,
                    noLineComments: true,
                    force: true
                }
            }
        },

        // watch our project for changes
        regarde: {
            compass: {
                files: [
                    'scss/*',
                    'scss/**/*'
                ],
                tasks: ['compass', 'livereload']
            },
            js: {
                files: [
                    'Gruntfile.js',
                    'js/source/*.js'
                ],
                tasks: ['jshint', 'uglify', 'livereload']
            }
        }

    });

    // load tasks
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-regarde');
    grunt.loadNpmTasks('grunt-contrib-livereload');

    // register task
    grunt.registerTask('default', [
        'livereload-start',
        'jshint',
        'compass',
        'uglify',
        'regarde'
    ]);

};
