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
                options: {
                    sourceMap: 'assets/js/map/source-map.js'
                },
                files: {
                    'assets/js/plugins.min.js': [
                        'assets/js/source/plugins.js'
                    ],
                    'assets/js/main.min.js': [
                        'assets/js/source/main.js'
                    ]
                }
            }
        },

        // style (Sass) compilation via Compass
        compass: {
            dist: {
                options: {
                    config: 'config.rb',
                    force: true
                }
            }
        },

        // watch our project for changes
        regarde: {
            compass: {
                files: [
                    'assets/scss/*',
                    'assets/scss/**/*'
                ],
                tasks: ['compass', 'livereload']
            },
            js: {
                files: [
                    'Gruntfile.js',
                    'assets/js/source/*.js'
                ],
                tasks: ['jshint', 'uglify', 'livereload']
            }
        },

        // image optimization
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7,
                    progressive: true
                },
                files: [{
                    expand: true,
                    cwd: 'assets/images/',
                    src: '**/*',
                    dest: 'assets/images/'
                }]
            }
        }

    });

    // load tasks
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
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
