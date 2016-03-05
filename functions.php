<?php
function rams_child_styles() {
wp_deregister_style( 'rams_style');
wp_register_style('rams_style', get_template_directory_uri(). '/style.css');
wp_enqueue_style('rams_style', get_template_directory_uri(). '/style.css');
wp_enqueue_style( 'rams_child_style', get_stylesheet_directory_uri().'/style.css', array('rams_style') );
}
add_action( 'wp_enqueue_scripts', 'rams_child_styles' );