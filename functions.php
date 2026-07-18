<?php


// WP MENUS
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ) {
	function wpt_setup() {
		register_nav_menu( 'main_nav', __( 'Main Navigation', 'wptuts' ) );
	}
}

function pure_origin_fallback_main_menu() {
	echo '<ul id="main-menu" class="main-menu-list">';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">About Us</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/services/' ) ) . '">Services</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/products/' ) ) . '">Products</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">Contact</a></li>';
	echo '</ul>';
}


/* GET ACTIVE CLASS */


// //////////////////////////////////// TO ENABLE SIDE BAR WIDGET IN WP ADMIN ///////////////////////////////
function arphabet_widgets_init() {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );



///// for max upload size
add_filter( 'upload_size_limit', 'b5f_increase_upload' );
function b5f_increase_upload( $bytes ){
    return 666666554432; // 32 megabytes
}
function word_count($string, $limit) {
$words = explode(' ', $string);
return implode(' ', array_slice($words, 0, $limit));
}

// ///////////////////////////// TO SHOW FEATURED IMAGE OPTION IN WP ADMIN ///////////////////////////
add_theme_support( 'post-thumbnails' );

// ///////////////////////////// FOR DIFFERENT SIZE OF FEATURED IMAGES ///////////////////////////
if ( function_exists( 'add_theme_support' ) ) {
 	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 600, 400 ); // default Post Thumbnail dimensions
}
if ( function_exists( 'add_image_size' ) ) {
	//add_image_size( 'thumb-banner', 800, 400, true );
	add_image_size( 'thumb-sm', 300, 200, true );
	//add_image_size( 'thumb-sm', 270, 180, true );
}


// Disable Admin Bar for All Users Except for Administrators
add_filter('show_admin_bar', '__return_false');
