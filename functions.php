<?php
/**
 * The functions and definitions
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @since Minima X1 1.0.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
 *
 * @since Minima X1 1.0.0
 */
if ( ! function_exists( 'minima_x1_setup' ) ) {
	function minima_x1_setup() {

		/**
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 *
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/
		 * @link https://codex.wordpress.org/Title_Tag
		 *
		 * @since Minima X1 1.0.0
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 *
		 * @since Minima X1 1.0.0
		 */
		add_theme_support( 'post-thumbnails' );
	}
}
add_action( 'after_setup_theme', 'minima_x1_setup' );

/**
 * Callback function to integrate Toolset Layouts
 *
 * @link https://wp-types.com/documentation/user-guides/layouts-theme-integration/ > Telling Layouts your theme is integrated
 */
function minima_x1_is_integrated_with_layouts() {
    return true;
}
add_filter('ddl-is_integrated_theme', 'minima_x1_is_integrated_with_layouts');

/**
 * Enqueue CSS styles and Fonts
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 *
 * @since MiniMax 1.0.0
 */
function minima_x1_styles() {        
	//Here you can enqueue your own style, for example:
	//wp_enqueue_style( 'handle', get_template_directory_uri() . '/css/file.css', '1.0.0', 'all' );

	//Enqueue the Minima X1 Main Style Sheet. Leave this last in the cascade, so if you add CSS to the Theme it applies.
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'minima_x1_styles' );

/** 
 * Enqueue JS Scripts
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 *
 * @since Minima X1 1.0.0
 */
function minima_x1_scripts() {
	//Here you can enqueue your won JS scripts, for example
	//wp_enqueue_script('handle', get_template_directory_uri() . '/js/file.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'minima_x1_scripts' );
