<?php
/* underscores 메뉴로 교체 
function register_my_menu(){
	register_nav_menu('header-menu',__('Header Menu'));
}
add_action('init','register_my_menu');
*/
/*Sider Enable*/
function register_my_sidebar(){
	register_sidebar( 
	   array(('name')=> __('Main Sidebar') 
	   ) 
	   );
}	   
add_action('init','register_my_sidebar'); 

function DoMyBest_setup(){
	/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'twentyfourteen-full-width', 1038, 576, true );
	add_theme_support('custom-header');
    // This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'DoMyBest' ),
		) );
}		
add_action( 'after_setup_theme', 'DoMyBest_setup' );

//  RICHARD-CHOI  add custom-style 
function my_custom_styles() {
  // wp_enqueue_style( 'banpo-style', get_stylesheet_uri().'/style.css', '', time()  );
  // Register my custom stylesheet
    wp_register_style( 'custom-styles', get_template_directory_uri().'/custom_style.css' ) ;
  // Load my custom stylesheet
    wp_enqueue_style( 'custom-styles' );
}
add_action( 'wp_enqueue_scripts', 'my_custom_styles' );

?>