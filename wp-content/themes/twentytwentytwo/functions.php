<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

// Function for redirect the user away from the site
function redirectuser() {

    //getting visitors Ip
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$vis_ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$vis_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else {
		$vis_ip = $_SERVER['REMOTE_ADDR'];
	}
   
	//checking if user ip starts with 77.29 
	if(substr( $vis_ip, 0, 5 ) === "119.1")
	{
		header("Location: https://goaway.com");
		die();
	}
	// else{
	// 	echo "$vis_ip";
	// }

	
  } 
  
  add_action('wp_footer', 'redirectuser');



  function navee_register_post_type() {
 
	register_post_type('project', [
		'label' => __('projects', 'txtdomain'),
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-project',
		'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
		'show_in_rest' => true,
		'rewrite' => ['slug' => 'project'],
		'taxonomies' => ['project_type'],
		'labels' => [
			'singular_name' => __('project', 'txtdomain'),
			'add_new_item' => __('Add new project', 'txtdomain'),
			'new_item' => __('New project', 'txtdomain'),
			'view_item' => __('View project', 'txtdomain'),
			'not_found' => __('No projects found', 'txtdomain'),
			'not_found_in_trash' => __('No projects found in trash', 'txtdomain'),
			'all_items' => __('All projects', 'txtdomain'),
			'insert_into_item' => __('Insert into project', 'txtdomain')
		],		
	]);
 
	register_taxonomy('project_type', ['project'], [
		'label' => __('Project type', 'txtdomain'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'project-type'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('Project type', 'txtdomain'),
			'all_items' => __('All Project types', 'txtdomain'),
			'edit_item' => __('Edit Project type', 'txtdomain'),
			'view_item' => __('View Project type', 'txtdomain'),
			'update_item' => __('Update type', 'txtdomain'),
			'add_new_item' => __('Add New Project type', 'txtdomain'),
			'new_item_name' => __('New Project type Name', 'txtdomain'),
			'search_items' => __('Search Project types', 'txtdomain'),
			'parent_item' => __('Parent Project type', 'txtdomain'),
			'parent_item_colon' => __('Parent Project type:', 'txtdomain'),
			'not_found' => __('No Project types found', 'txtdomain'),
		]
	]);
	register_taxonomy_for_object_type('project_type', 'project');
 
	



}





add_action('init', 'navee_register_post_type');



 





if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
