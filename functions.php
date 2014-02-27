<?php

/**
 * Theme Setup
 * @since 1.0.0
 *
 * This setup function attaches all of the site-wide functions
 * to the correct hooks and filters. All the functions themselves
 * are defined below this setup function.
 *
 */

add_action( 'genesis_setup','child_theme_setup', 15 );
function child_theme_setup() {

	/****************************************
	Define child theme version
	*****************************************/

	define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/style.css' ) );


	/****************************************
	Include theme helper functions
	*****************************************/

	include_once( CHILD_DIR . '/lib/theme-helpers.php' );


	/****************************************
	Setup child theme functions
	*****************************************/

	include_once( CHILD_DIR . '/lib/theme-functions.php' );


	/****************************************
	Backend
	*****************************************/

	// Image Sizes
	// add_image_size( $name, $width = 0, $height = 0, $crop = false );

	// Clean up Head
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );

	// Structural Wraps
	add_theme_support( 'genesis-structural-wraps', array( 'header', 'nav', 'subnav', 'inner', 'footer-widgets', 'footer' ) );

	// Unregister Secondary Nav Menu
	add_theme_support( 'genesis-menus', array( 'primary' => 'Primary Navigation Menu' ) );

	// Sidebars
	unregister_sidebar( 'sidebar-alt' );
	genesis_register_sidebar( array( 'name' => 'Footer', 'id' => 'custom-footer' ) );
	//add_theme_support( 'genesis-footer-widgets', 4 );

	// Execute shortcodes in widgets
	// add_filter( 'widget_text', 'do_shortcode' );

	// Remove Unused Page Layouts
	genesis_unregister_layout( 'content-sidebar-sidebar' );
	genesis_unregister_layout( 'sidebar-sidebar-content' );
	genesis_unregister_layout( 'sidebar-content-sidebar' );

	// Remove Unused User Settings
	add_filter( 'user_contactmethods', 'mb_contactmethods' );
	remove_action( 'show_user_profile', 'genesis_user_options_fields' );
	remove_action( 'edit_user_profile', 'genesis_user_options_fields' );
	remove_action( 'show_user_profile', 'genesis_user_archive_fields' );
	remove_action( 'edit_user_profile', 'genesis_user_archive_fields' );
	remove_action( 'show_user_profile', 'genesis_user_seo_fields' );
	remove_action( 'edit_user_profile', 'genesis_user_seo_fields' );
	remove_action( 'show_user_profile', 'genesis_user_layout_fields' );
	remove_action( 'edit_user_profile', 'genesis_user_layout_fields' );

	// Editor Styles
	add_editor_style( 'editor-style.css' );

	// Remove Genesis Theme Settings Metaboxes
	add_action( 'genesis_theme_settings_metaboxes', 'mb_remove_genesis_metaboxes' );

	// Reposition Genesis Layout Settings Metabox
	remove_action( 'admin_menu', 'genesis_add_inpost_layout_box' );
	add_action( 'admin_menu', 'mb_add_inpost_layout_box' );

	// Don't update theme
	add_filter( 'http_request_args', 'mb_dont_update_theme', 5, 2 );

	// Setup Child Theme Settings
	include_once( CHILD_DIR . '/lib/child-theme-settings.php' );

	// Prevent File Modifications
	define ( 'DISALLOW_FILE_EDIT', true );

	// Set Content Width
	$content_width = apply_filters( 'content_width', 740, 740, 1140 );

	// Add support for custom background
	add_theme_support( 'custom-background' );

	// Add support for custom header
	add_theme_support( 'genesis-custom-header', array( 'width' => 1140, 'height' => 100 ) );

	// Remove Dashboard Meta Boxes
	add_action( 'wp_dashboard_setup', 'mb_remove_dashboard_widgets' );

	// Change Admin Menu Order
	add_filter( 'custom_menu_order', 'mb_custom_menu_order' );
	add_filter(' menu_order', 'mb_custom_menu_order' );

	// Hide Admin Areas that are not used
	add_action( 'admin_menu', 'mb_remove_menu_pages' );

	// Remove default link for images
	add_action( 'admin_init', 'mb_imagelink_setup', 10 );

	// Show Kitchen Sink in WYSIWYG Editor
	add_filter( 'tiny_mce_before_init', 'mb_unhide_kitchensink' );

	// Define custom post type capabilities for use with Members
	add_action( 'admin_init', 'mb_add_post_type_caps' );


	/****************************************
	Frontend
	*****************************************/

	// Add HTML5 markup structure
	add_theme_support( 'html5' );

	// Add viewport meta tag for mobile browsers
	add_theme_support( 'genesis-responsive-viewport' );

	// HTML5 doctype with conditional classes
	remove_action( 'genesis_doctype', 'genesis_do_doctype' );
	add_action( 'genesis_doctype', 'mb_html5_doctype' );

	// Load custom favicon to header
	add_filter( 'genesis_pre_load_favicon', 'mb_custom_favicon_filter' );

	// Load Apple touch icon in header
	add_filter( 'genesis_meta', 'mb_apple_touch_icon' );

	// Remove Edit link
	add_filter( 'genesis_edit_post_link', '__return_false' );

	// Footer
	remove_action( 'genesis_footer', 'genesis_do_footer' );
	add_action( 'genesis_footer', 'mb_footer' );

	// Enqueue Scripts
	add_action( 'wp_enqueue_scripts', 'mb_scripts' );

	// Remove Query Strings From Static Resources
	add_filter( 'script_loader_src', 'mb_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', 'mb_remove_script_version', 15, 1 );

	// Remove Read More Jump
	add_filter( 'the_content_more_link', 'mb_remove_more_jump_link' );


	/****************************************
	Theme Views
	*****************************************/

	include_once( CHILD_DIR . '/lib/theme-views.php' );


	/****************************************
	Require Plugins
	*****************************************/

	require_once( CHILD_DIR . '/lib/class-tgm-plugin-activation.php' );
	require_once( CHILD_DIR . '/lib/theme-require-plugins.php' );

	add_action( 'tgmpa_register', 'mb_register_required_plugins' );

}


/****************************************
Misc Theme Functions
*****************************************/

// Unregister the superfish scripts
add_action( 'wp_enqueue_scripts', 'mb_unregister_superfish' );

// Filter Yoast SEO Metabox Priority
add_filter( 'wpseo_metabox_prio', 'mb_filter_yoast_seo_metabox' );
