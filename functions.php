<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
	wp_enqueue_script( 'jquery' );
   
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ) );
	wp_enqueue_style( 'cutcats-styles', get_stylesheet_directory_uri() . '/css/cutcats-2017.css', array(), null);
	wp_enqueue_style( 'fonts-styles', get_stylesheet_directory_uri() . '/css/fonts.css', array(), null);
	wp_enqueue_script( 'parallax-script', get_stylesheet_directory_uri() . '/js/parallax.min.js', array(), null);

}

function add_menu_toggle_atts( $atts, $item, $args ){
	$atts['data-toggle'] = 'collapse';
	$atts['data-target'] = '.navbar-collapse';
	 return $atts;
}

//add_filter( 'nav_menu_link_attributes', 'add_menu_toggle_atts', 10, 3);
				
function clear_nav_menu_item_class($classes, $item, $args) {
    return array();
}
add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);

function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);