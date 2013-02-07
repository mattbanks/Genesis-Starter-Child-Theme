# WordPress Genesis Starter Child Theme

Version: 1.1.2

## Contributors:

Matt Banks ( [@mattbanks](http://twitter.com/mattbanks) / [kernelcreativemedia.com](http://www.kernelcreativemedia.com) / [mattbanks.me](http://www.mattbanks.me) )

## Summary

WordPress Starter Theme for use as Child Theme of the Genesis Framework for building custom themes, using Compass/SCSS. Tested with WordPress 3.5 and Genesis 1.9.1.

## Usage

Rename folder to your theme name, change `scss/style.scss` intro block to your theme information, and begin development. Code as you will.

I use [CodeKit](http://incident57.com/codekit/) for Compass/SCSS compiling, but feel free to use whatever app or command line tool you prefer. [LiveReload](http://livereload.com/) and [Grunt](http://gruntjs.com/) are also great tools for compiling SCSS.

- Compile `scss/style.scss` to `style.css` (defined in config.rb for Compass)
- Minify `js/plugins.js` to `js/plugins.min.js`
- Minify `js/main.js` to `js/main.min.js`
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

### Changelog

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
