<?php
/**
 * Kadence functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kadence
 */

define( 'KADENCE_VERSION', '1.2.9' );
define( 'KADENCE_MINIMUM_WP_VERSION', '6.0' );
define( 'KADENCE_MINIMUM_PHP_VERSION', '7.4' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], KADENCE_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), KADENCE_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}
// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Load the `kadence()` entry point function.
require get_template_directory() . '/inc/class-theme.php';

// Load the `kadence()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'Kadence\kadence' );

function sampath_new_theme(){
    wp_enqueue_script( "Mobile Hrader" , get_template_directory_uri().'/assets/js/mobile-header.js' , ['jquery'] ,'1.0',true);
}
add_action ('wp_enqueue_scripts', 'sampath_new_theme');	
function theme_header_functions(){
    register_nav_menus( 
        array(
            'header-Main-Menu' => "Main Menu",
            'Footer-Main-menu' => "Footer Menu",
            'Mobile-Main-Menu' => "Mobile Menu"
        )
        );
}
add_action( 'after_setup_theme' , 'theme_header_functions',0);


add_action('widgets_init' , 'theme_footer_widget');

function theme_footer_widget(){
    register_sidebar(
        array(
            'name' => 'Header Button' ,
            'id' => 'header-button',
            'description'    => 'Header Button Text',
            'before_widget'  => '<div class="widget-wrapper text-white sampath-header">',
            'after_widget'   => '</div>',
            'before_title'   => '<h2 class="widget-title">',
            'after_title'    => '</h2>',
        )
    );
}
