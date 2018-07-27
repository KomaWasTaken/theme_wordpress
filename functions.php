<?php
define('version', '1.0.0');


/* Charge le front-end */
function wpdocs_theme_name_scripts() {

    /* charge les styles */
    wp_enqueue_style('bootstrap-style', get_template_directory_uri()  .'/css/bootstrap.min.css', array() , version , 'all');
    wp_enqueue_style('main-style', get_template_directory_uri()  .'/style.css', array("bootstrap-style") , version , 'all' );
    /* charge les scripts */
    wp_enqueue_script('main-script', get_template_directory_uri()  .'/js/script.js', array('jquery','bootstrap-script') , version , true );
    wp_enqueue_script('bootstrap-script', get_template_directory_uri()  .'/js/bootstrap.min.js', array() , version , true );
  }
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

    
/* Chargement dans l'admin */
function admin_scripts(){
    wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), version );
}
add_action('admin_init', 'admin_scripts');



/* Init */
function theme_setup(){

    /* support des vignettes */
    add_theme_support( 'post-thumbnails' );

    /* enlève générateur de versions */
    remove_action('wp_head', 'wp_generator');

    /* enlève les guillemets à la française */
    remove_filter ('the_content', 'wptexturize');

    /* support du titre */
    add_theme_support( 'title-tag' );
  
    /* Appel la librairie bootstrap nav_walker */
    require_once('includes/class-wp-bootstrap-navwalker.php');

    /* support du menu */
    register_nav_menus( array( 
		'primary' => _x( 'Primary', 'nav menu location', 'kraken3000' ),
		'top'     => _x( 'Top', 'nav menu location', 'kraken3000' ),
		'social'  => _x( 'Social', 'nav menu location', 'kraken3000' )
    ) );
    
    add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );
}

add_action('after_setup_theme', 'theme_setup');

/**
 * Display descriptions in main navigation.
 *
 * @param  string  $item_output The menu item output.
 * @param  WP_Post $item        Menu item object.
 * @param  int     $depth       Depth of the menu.
 * @param  array   $args        wp_nav_menu() arguments.
 * @return string  Menu item with possible description.
 * @since  1.0.0
 */
function toivo_lite_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$extra_class = ( 0 === $depth ) ? ' top-depth' : '';
		$item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description' . $extra_class . '"><span class="menu-item-description-mark">' . ' ' . _x( '&ndash;' , 'dash before menu item description', 'toivo-lite' ) . '</span> ' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'toivo_lite_nav_description', 10, 4 );

/**
 * Add body classes.
 *
 * @param  array  $classes  body classes.
 * @return array  $classes  body classes.
 * @since  1.0.0
 */
function toivo_lite_extra_layout_classes( $classes ) {
	
	/* Add the '.custom-header-image' class if the user is using a custom header image. */
	if ( get_header_image() ) {
		$classes[] = 'custom-header-image';
	}
	
	/* Add the 'top-menus-disabled' class if the user is not using top and social menu. */
	if ( !has_nav_menu( 'top' ) && !has_nav_menu( 'social' ) ) {
		$classes[] = 'top-menus-disabled';
    }
    return $classes;
	
}
add_filter( 'body_class', 'toivo_lite_extra_layout_classes' );