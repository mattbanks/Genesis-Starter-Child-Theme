# WordPress Genesis Starter Child Theme

Version: 2.0

## Contributors:

Matt Banks ( [@mattbanks](http://twitter.com/mattbanks) / [kernelcreativemedia.com](http://www.kernelcreativemedia.com) / [mattbanks.me](http://www.mattbanks.me) )

## Summary

WordPress Starter Theme for use as Child Theme of the Genesis Framework for building custom themes, using Compass/SCSS and Grunt. Tested with WordPress 3.5.1 and Genesis 1.9.1.

## Usage

The theme is setup to use [Grunt](http://gruntjs.com/) to compile Compass/SCSS, lint, concatenate and minify JavaScript (with source maps), optimize images, and [LiveReload](http://livereload.com/) the browser (with extension), with flexibility to add any additional tasks via the Gruntfile. Alternatively, you can use [CodeKit](http://incident57.com/codekit/) or whatever else you prefer to compile the SCSS and manage the JavaScript.

Rename folder to your theme name, change the `assets/scss/style.scss` intro block to your theme information. Open the theme directory in terminal and run `npm install` to pull in all Grunt dependencies. Run `grunt` to execute tasks. Code as you will. If you have the LiveReload browser extension, it will reload after any SCSS or JS changes. To optimize images, run `grunt imagemin`.

- Compile `assets/scss/style.scss` to `style.css` (all paths defined in config.rb for Compass)
- Compile `assets/scss/editor-style.scss` to `editor-style.css`
- Concatenate and minify all plugins in `assets/js/vender` and `assets/js/source/plugins.js` to `assets/js/plugins.min.js`
- Minify `assets/js/source/main.js` to `assets/js/main.min.js`
- ??
- Profit

### Features

1. Compass & SCSS with easy-to-use of mixins ready to go
2. Easy to customize
3. Modernizr 2.6.2 loaded in <head>
4. Child theme tweaks
5. More to come!

### Suggested Plugins

* [Use Google Libraries](http://wordpress.org/extend/plugins/use-google-libraries/)
* [WordPress SEO by Yoast](http://wordpress.org/extend/plugins/wordpress-seo/)
* [Google Analytics for WordPress by Yoast](http://wordpress.org/extend/plugins/google-analytics-for-wordpress/)
* [W3 Total Cache](http://wordpress.org/extend/plugins/w3-total-cache/)
* [Gravity Forms](http://www.gravityforms.com/)
* [Pods Framework](http://www.podsframework.org/)

### Changelog

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
