<?php

function load_scripts(){
  // loading js script
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );
  
  // loading font-awesome
  wp_enqueue_style( 'font-awesome', "https://use.fontawesome.com/releases/v5.6.3/css/all.css", array(), '1.0', 'all' );
  // loading roboto font
  wp_enqueue_style( 'roboto-font', "https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700", array(), '1.0', 'all' );
  // loading template styles
  wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array('font-awesome'), '1.0', 'all' );
}

// Menus
register_nav_menus(
	array(
		'my_main_menu' => 'Main Menu'

	)
);

// Adding to queue
add_action( 'wp_enqueue_scripts', 'load_scripts' );