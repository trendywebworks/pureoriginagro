<?php


// WP MENUS
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
	function wpt_setup() {
		register_nav_menu( 'main_nav', __( 'Main Navigation', 'wptuts' ) );
        register_nav_menu( 'footer_nav_1', __( 'Footer Navigation 1', 'wptuts' ) );
        register_nav_menu( 'footer_nav_2', __( 'Footer Navigation 2', 'wptuts' ) );
        register_nav_menu( 'footer_nav_3', __( 'Footer Navigation 3', 'wptuts' ) );
        register_nav_menu( 'footer_nav_4', __( 'Footer Navigation 4', 'wptuts' ) );
        register_nav_menu( 'footer_nav_5', __( 'Footer Navigation 5', 'wptuts' ) );
	} endif;


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
add_image_size($name, $width, $height, $crop);

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