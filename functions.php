<?php
/*
*My Theme Function
*/

//Theme Title
add_theme_support('title-tag');

//css calling
function ars_js_css_calling() {
  //wp_enqueue_style( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $media:string )
  wp_enqueue_style( 'ars-style', get_stylesheet_uri());
  wp_register_style( 'bootstrap',get_template_directory_uri().'./css/bootstrap.css', array(), '5.0.2', 'all' );
  wp_enqueue_style('bootstrap');
  wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
  wp_enqueue_style( 'custom');


  //jquery
  //wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/javascript/bootstrap.js', array(), '5.0.2', 'true');
}

//add_action( $hook_name:string, $callback:callable, $priority:integer, $accepted_args:integer )
add_action('wp_enqueue_scripts','ars_js_css_calling');
