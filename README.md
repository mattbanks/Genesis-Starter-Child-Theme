# WordPress Genesis Starter Child Theme

Version: 2.7.0

## Contributors:

Matt Banks ( [@mattbanks](http://twitter.com/mattbanks) / [kernelcreativemedia.com](http://www.kernelcreativemedia.com) / [mattbanks.me](http://www.mattbanks.me) )

## Summary

WordPress Starter Theme for use as Child Theme of the Genesis Framework for building custom themes, using Compass/SCSS and Grunt. Tested with WordPress 3.8.1 and Genesis 2.0.1.

## Usage

The theme is setup to use [Grunt](http://gruntjs.com/) to compile Compass/SCSS, lint, concatenate and minify JavaScript (with source maps), optimize images, and [LiveReload](http://livereload.com/) the browser (with extension), with flexibility to add any additional tasks via the Gruntfile. Alternatively, you can use [CodeKit](http://incident57.com/codekit/) or whatever else you prefer to compile the SCSS and manage the JavaScript.

Rename folder to your theme name, change the `assets/styles/source/style.scss` intro block to your theme information. Open the theme directory in terminal and run `npm install` to pull in all Grunt dependencies. Run `grunt` to execute tasks. Code as you will. If you have the LiveReload browser extension, it will reload after any SCSS or JS changes.

- Compile `assets/styles/source/style.scss` to `style.css` (all paths defined in config.rb for Compass)
- Compile `assets/styles/source/editor-style.scss` to `editor-style.css`
- Concatenate and minify plugins in `assets/js/vendor` and `assets/js/source/plugins.js` to `assets/js/plugins.min.js`
- Minify `assets/js/source/main.js` to `assets/js/main.min.js`
- ??
- Profit

To concatenate and minify your jQuery plugins, add them to the `assets/js/vendor` directory and add the `js` filename and path to the `Gruntfile` `uglify` task. Previous versions of the starter theme automatically pulled all plugins in the `vendor` directory, but this has changed to allow more granular control and for managing plugins and assets with bower.

### Bower

Supports [bower](https://github.com/bower/bower) to install and manage JavaScript dependencies in the `assets/js/vendor` folder.

### Deployment

The theme includes deployments via [grunt-rsync](https://github.com/jedrichards/grunt-rsync). The Gruntfile includes setups for staging and production - edit your paths and host, then run `grunt rsync:staging` or `grunt rsync:production` to deploy your files via rsync.

### Features

1. Compass & SCSS with easy-to-use of mixins ready to go
2. Easy to customize
3. Grunt and LiveReload to make it more gooder
4. Child theme tweaks
5. More to come!

### Suggested Plugins

* [Use Google Libraries](http://wordpress.org/extend/plugins/use-google-libraries/)
* [WordPress SEO by Yoast](http://wordpress.org/extend/plugins/wordpress-seo/)
* [Google Analytics for WordPress by Yoast](http://wordpress.org/extend/plugins/google-analytics-for-wordpress/)
* [W3 Total Cache](http://wordpress.org/extend/plugins/w3-total-cache/)
* [Gravity Forms](http://www.gravityforms.com/)
* [Pods Framework](http://www.podsframework.org/)

![dependencies](https://david-dm.org/mattbanks/Genesis-Starter-Child-Theme.png)

### Changelog

#### Version 2.7.0

* rename assets/scss to assets/styles/source
* move scss directory
* process and livereload images in watch task
* don't livereload html and php due to collisions and bugs in watch task
* tweak imagemin processing
* run all tasks on grunt run initially
* update grunt dependencies

#### Version 2.6.5

* update grunt dependencies
* update spacing in functions

#### Version 2.6.4

* update deployment info to fit new rsyncwrapper options

#### Version 2.6.3

* source maps fully work now!

#### Version 2.6.2

* update to Genesis 2.0.1 stylesheet
* update grunt dependencies

#### Version 2.6.1

* update grunt dependencies
* switch to load-grunt-tasks for loading everything
* restructure deploy task based on grunt-rsync updates

#### Version 2.6

* update to Genesis 2.0.0 final

#### Version 2.5

* manually manage plugins in `Gruntfile` instead of automatically pulling all files to streamline bower usage.

#### Verion 2.4

* add bower support with `.bowerrc` (thanks [tjtate](https://github.com/tjtate))
* update to Genesis 2.0 RC1

#### Version 2.3

* remove duplicate meta tag function
* add partials folder with social network sharing buttons partial as example

#### Version 2.2

* update to Genesis 2.0.0 beta 2 for HTML5 markup and structure
* tweak Gruntfile.js to fix LiveReload issues and generate source maps for both main.js and plugins.js
* optimizations and tweaks here and there

#### Version 2.1

* add deployments via rsync

#### Version 2.0

* reorganize code in `assets` folder for fonts, images, js and scss
* setup Gruntfile to use Grunt for all compiling, concatenation and minification

#### Version 1.1.4

* add [TGM Plugin Activation](http://tgmpluginactivation.com/) to require plugins be installed and activated
* prevent file editing in theme editor

#### Version 1.1.3

* load Apple touch icon in head

#### Version 1.1.2

* fix improper footer function

#### Version 1.1.1

* added `templates` folder for page templates with Portfolio page template (as an example)

#### Version 1.1

* code cleanup in `functions.php` - hooks and filters now here, functions moved to `lib/theme-functions.php`
* added more functions and tweaked others to streamline development time
* added `lib/theme-views.php` for placing all hooked functions for various pages (ie. custom queries, loops, addons, etc)

#### Version 1.0

* initial version

### Credits

Without these projects, this WordPress Genesis Starter Child Theme wouldn't be where it is today.

* [SASS / SCSS](http://sass-lang.com/)
* [Compass](http://compass-style.org)
* [Genesis Framework](http://my.studiopress.com/themes/genesis/)
* [Bill Erickson's Genesis Child Theme](https://github.com/billerickson/BE-Genesis-Child)
* [HTML5 Boilerplate](http://html5boilerplate.com)
* [Grunt](http://gruntjs.com/)
* [Bower](https://github.com/bower/bower)
