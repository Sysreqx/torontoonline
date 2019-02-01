<?php
/* torontoonline */

add_action( 'wp_enqueue_scripts', 'torontoonline_scripts' );
function torontoonline_scripts() {
	wp_enqueue_style('slickslider-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'slickslider-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );
	wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true );
}

/* Navigation */
add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'main_menu' => __( 'Main Menu', 'torontoonline' ),
	) );
});

/* Widget zone */
add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => __('Sidebar Testimonials'),
		'id'            => "sidebar-testimonials",
		'description'   => 'Sidebar Testimonials',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	) );
	register_sidebar( array(
		'name'          => __('Widgets on Front Page'),
		'id'            => "front_page_widgets",
		'description'   => 'Widgets on Front Page',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	) );
}

/* Featured Image */
add_theme_support( 'post-thumbnails' );

add_image_size( 'featured', 1100, 418, true );
add_image_size( 'medium_blog', 358, 208, true );

/* Display admin bar */
add_filter('show_admin_bar', '__return_false');

/* Tags */
add_theme_support('title-tag');
