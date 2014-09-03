# WordPress Genesis Starter Child Theme

Version: 3.0.0

## Author:

Matt Banks ( [@mattbanks](http://twitter.com/mattbanks) / [collectivthkg.com](http://collectivthkg.com) / [mattbanks.me](http://www.mattbanks.me) )

## Summary

WordPress Starter Theme for use as Child Theme of the Genesis Framework for building custom themes. Uses SCSS, AutoPrefixr and Grunt for all processing tasks. Syncs changes across local development devices with BrowserSync. Tested up to WordPress 4.0 RC1 and Genesis 2.1.2.

## Usage

The theme is setup to use [Grunt](http://gruntjs.com/) to compile SCSS (with source maps), run it through [AutoPrefixr](https://github.com/ai/autoprefixer), lint, concatenate and minify JavaScript (with source maps), optimize images, and syncs changes across local development devices with [BrowserSync](https://github.com/shakyShane/browser-sync), with flexibility to add any additional tasks via the Gruntfile. Alternatively, you can use [CodeKit](http://incident57.com/codekit/) or whatever else you prefer to compile the SCSS and manage the JavaScript.

Rename folder to your theme name, change the `style.scss` intro block to your theme information. Open the theme directory in terminal and run `npm install` to pull in all Grunt dependencies. Run `grunt` to execute tasks. Code as you will.

If you are using MAMP or Vagrant, change the `proxy` option in the `grunt browserSync` task to match your vhost URL.

- Compile `assets/styles/style.scss` to `style.css`
- Compile `assets/styles/editor-style.scss` to `editor-style.css`
- Concatenate and minify plugins in `assets/js/vendor` and `assets/js/source/plugins.js` to `assets/js/plugins.min.js`
- Minify and lint `assets/js/source/main.js` to `assets/js/main.min.js`
- ??
- Profit

To concatenate and minify your jQuery plugins, add them to the `assets/js/vendor` directory and add the `js` filename and path to the `Gruntfile` `uglify` task. Previous versions of the starter theme automatically pulled all plugins in the `vendor` directory, but this has changed to allow more granular control and for managing plugins and assets with bower.

### Bower

Supports [bower](https://github.com/bower/bower) to install and manage JavaScript dependencies in the `assets/js/vendor` folder.

### Deployment

The theme includes deployments via [grunt-rsync](https://github.com/jedrichards/grunt-rsync). The Gruntfile includes setups for staging and production - edit your paths and host, then run `grunt rsync:staging` or `grunt rsync:production` to deploy your files via rsync.

### Features

1. SCSS with AutoPrefixr and easy-to-use of mixins ready to go
2. Easy to customize
3. Grunt and BrowserSync to make it more gooder
4. Child theme tweaks
5. More to come!

### Suggested Plugins

* [WordPress SEO by Yoast](http://wordpress.org/extend/plugins/wordpress-seo/)
* [Google Analytics for WordPress by Yoast](http://wordpress.org/extend/plugins/google-analytics-for-wordpress/)
* [W3 Total Cache](http://wordpress.org/extend/plugins/w3-total-cache/)
* [Gravity Forms](http://www.gravityforms.com/)
* [Pods Framework](http://www.podsframework.org/)

![dependencies](https://david-dm.org/mattbanks/Genesis-Starter-Child-Theme.png)

### Contributing:

Anyone and everyone is welcome to contribute! Check out the [Contributing Guidelines](CONTRIBUTING.md).

### Credits

Without these projects, this WordPress Genesis Starter Child Theme wouldn't be where it is today.

* [Genesis Framework](http://my.studiopress.com/themes/genesis/)
* [SASS / SCSS](http://sass-lang.com/)
* [AutoPrefixr](https://github.com/ai/autoprefixer)
* [Bill Erickson's Genesis Child Theme](https://github.com/billerickson/BE-Genesis-Child)
* [HTML5 Boilerplate](http://html5boilerplate.com)
* [Grunt](http://gruntjs.com/)
* [Bower](https://github.com/bower/bower)
