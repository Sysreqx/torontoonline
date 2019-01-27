<?php
/* torontoonline */

add_action( 'wp_enqueue_scripts', 'torontoonline_scripts' );
function torontoonline_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'main_menu' => __( 'Main Menu', 'torontoonline' ),
	) );
});

add_filter('show_admin_bar', '__return_false');
