<?php
define('version', '1.0.0');
/*** Ajouter un script ou un fichier CSS de la bonne façon */
function wpdocs_theme_name_scripts() {

    wp_enqueue_style('bootstrap-style', get_template_directory_uri()  .'/css/bootstrap.min.css', array() , version , 'all');
    wp_enqueue_style('main-style', get_template_directory_uri()  .'/style.css', array("bootstrap-style") , version , 'all' );
    wp_enqueue_script('main-script', get_template_directory_uri()  .'/js/script.js', array('jquery') , version , true );

    }
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

    
function admin_scripts(){
    wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), MACH_VERSION );
}
add_action('admin_init', 'admin_scripts');