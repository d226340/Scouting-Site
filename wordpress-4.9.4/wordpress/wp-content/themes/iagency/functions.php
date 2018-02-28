<?php

// ----------------------------------------------------------------------------------
//	Register Front-End Styles And Scripts
// ----------------------------------------------------------------------------------

function iagency_ithemer_child_frontscripts() {

	wp_enqueue_style( 'ithemer-style', get_template_directory_uri() . '/style.css', array() );
	wp_enqueue_style( 'iagency-style', get_stylesheet_uri());
	
}
add_action( 'wp_enqueue_scripts', 'iagency_ithemer_child_frontscripts' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function iagency_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar WooCommerce', 'iagency' ),
		'id'            => 'sidebar-woo',
		'description'   => esc_html__( 'Add widgets here.', 'iagency' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar widget %2$s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'iagency_widgets_init' );

require get_stylesheet_directory() . '/inc/customizer-slider.php';
require get_stylesheet_directory() . '/inc/customizer-css.php';




