# Changelog

## Version 3.0.0

* move scss source files back to assets/styles
* reorganize scss with new, more logical partials
* change back to putting `style.css` and `editor-style.css` in the root of theme folder from scss compilation
* general cleanup
* change from using livereload to browsersync
* update grunt dependencies
* genesis 2.1.2 stylesheet

## Version 2.7.3

* move load-grunt-tasks to devDependencies

## Version 2.7.2

* update grunt dependencies
* update removing version query string

## Version 2.7.1

* update grunt dependencies
* genesis 2.0.2 stylesheet
* update comment for removing secondary nav menu in `functions.php`
* update config.rb to reflect new `asset/styles/source` directory

## Version 2.7.0

* rename assets/scss to assets/styles/source
* move scss directory
* process and livereload images in watch task
* don't livereload html and php due to collisions and bugs in watch task
* tweak imagemin processing
* run all tasks on grunt run initially
* update grunt dependencies

## Version 2.6.5

* update grunt dependencies
* update spacing in functions

## Version 2.6.4

* update deployment info to fit new rsyncwrapper options

## Version 2.6.3

* source maps fully work now!

## Version 2.6.2

* update to Genesis 2.0.1 stylesheet
* update grunt dependencies

## Version 2.6.1

* update grunt dependencies
* switch to load-grunt-tasks for loading everything
* restructure deploy task based on grunt-rsync updates

## Version 2.6

* update to Genesis 2.0.0 final

## Version 2.5

* manually manage plugins in `Gruntfile` instead of automatically pulling all files to streamline bower usage.

#### Verion 2.4

* add bower support with `.bowerrc` (thanks [tjtate](https://github.com/tjtate))
* update to Genesis 2.0 RC1

## Version 2.3

* remove duplicate meta tag function
* add partials folder with social network sharing buttons partial as example

## Version 2.2

* update to Genesis 2.0.0 beta 2 for HTML5 markup and structure
* tweak Gruntfile.js to fix LiveReload issues and generate source maps for both main.js and plugins.js
* optimizations and tweaks here and there

## Version 2.1

* add deployments via rsync

## Version 2.0

* reorganize code in `assets` folder for fonts, images, js and scss
* setup Gruntfile to use Grunt for all compiling, concatenation and minification

## Version 1.1.4

* add [TGM Plugin Activation](http://tgmpluginactivation.com/) to require plugins be installed and activated
* prevent file editing in theme editor

## Version 1.1.3

* load Apple touch icon in head

## Version 1.1.2

* fix improper footer function

## Version 1.1.1

* added `templates` folder for page templates with Portfolio page template (as an example)

## Version 1.1

* code cleanup in `functions.php` - hooks and filters now here, functions moved to `lib/theme-functions.php`
* added more functions and tweaked others to streamline development time
* added `lib/theme-views.php` for placing all hooked functions for various pages (ie. custom queries, loops, addons, etc)

## Version 1.0

* initial version
