<?php
/**
 * Theme Name:   Divi Child
 * Theme URI:    https://futurewordpress.com/
 * Description:  Divi Child Theme
 * Author:       Future WordPress
 * Author URI:   https://developer.futurewordpress.com/
 * @package: Divi-child
 */


wp_enqueue_style( 'devi-child-style', get_stylesheet_directory_uri( __FILE__ ) . '/main.css', [], 'all' );

add_action( 'wp_head', 'head', 10, 0 );
function head() {
  ?>
    <link rel="preconnect" href="https://developers.google.com">
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://marketingplatform.google.com">
    <link rel="preconnect" href="https://fonts.google.com">
    <link rel="preconnect" href="https://marketingplatform.google.com">
    <link rel="preconnect" href="https://www.googleadservices.com">
    <link rel="preconnect" href="https://googleads.g.doubleclick.net">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://www.gstatic.com">
  <?php
}










if ( ! defined( 'DIVI_CHILD_DIR_PATH' ) ) {
	define( 'DIVI_CHILD_DIR_PATH', untrailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'DIVI_CHILD_DIR_URI' ) ) {
	define( 'DIVI_CHILD_DIR_URI', untrailingslashit( get_stylesheet_directory_uri() ) );
}

if ( ! defined( 'DIVI_CHILD_BUILD_URI' ) ) {
	define( 'DIVI_CHILD_BUILD_URI', untrailingslashit( get_stylesheet_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'DIVI_CHILD_BUILD_PATH' ) ) {
	define( 'DIVI_CHILD_BUILD_PATH', untrailingslashit( get_stylesheet_directory() ) . '/assets/build' );
}

if ( ! defined( 'DIVI_CHILD_BUILD_JS_URI' ) ) {
	define( 'DIVI_CHILD_BUILD_JS_URI', untrailingslashit( get_stylesheet_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'DIVI_CHILD_BUILD_JS_DIR_PATH' ) ) {
	define( 'DIVI_CHILD_BUILD_JS_DIR_PATH', untrailingslashit( get_stylesheet_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'DIVI_CHILD_BUILD_IMG_URI' ) ) {
	define( 'DIVI_CHILD_BUILD_IMG_URI', untrailingslashit( get_stylesheet_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'DIVI_CHILD_BUILD_CSS_URI' ) ) {
	define( 'DIVI_CHILD_BUILD_CSS_URI', untrailingslashit( get_stylesheet_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'DIVI_CHILD_BUILD_CSS_DIR_PATH' ) ) {
	define( 'DIVI_CHILD_BUILD_CSS_DIR_PATH', untrailingslashit( get_stylesheet_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'DIVI_CHILD_BUILD_LIB_URI' ) ) {
	define( 'DIVI_CHILD_BUILD_LIB_URI', untrailingslashit( get_stylesheet_directory_uri() ) . '/assets/build/library' );
}

if ( ! defined( 'DIVI_CHILD_ARCHIVE_POST_PER_PAGE' ) ) {
	define( 'DIVI_CHILD_ARCHIVE_POST_PER_PAGE', 9 );
}

if ( ! defined( 'DIVI_CHILD_SEARCH_RESULTS_POST_PER_PAGE' ) ) {
	define( 'DIVI_CHILD_SEARCH_RESULTS_POST_PER_PAGE', 9 );
}

require_once DIVI_CHILD_DIR_PATH . '/inc/helpers/autoloader.php';
require_once DIVI_CHILD_DIR_PATH . '/inc/helpers/template-tags.php';

function divi_child_get_theme_instance() {
	\DIVI_CHILD_THEME\Inc\DIVI_CHILD_THEME::get_instance();
}

divi_child_get_theme_instance();



?>