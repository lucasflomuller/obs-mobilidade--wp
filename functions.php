<?php

function load_scripts(){
  // loading js script
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );
  
  // loading font-awesome
  wp_enqueue_style( 'font-awesome', "https://use.fontawesome.com/releases/v5.6.3/css/all.css", array(), '1.0', 'all' );
  // loading roboto font
  wp_enqueue_style( 'roboto-font', "https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700", array(), '1.0', 'all' );
  // loading template styles
    // Default custom style
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array('font-awesome'), '1.0', 'all' );
    // Wordpress fix custom style
    wp_enqueue_style( 'custom', get_template_directory_uri(  ) . '/css/custom.css', array('template'), '1.0', 'all');
}

// Registrando menus
register_nav_menus(
	array(
		'my_main_menu' => 'Main Menu'
	)
);

// Adding to queue
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Changing link item on menus class navigation__link
function add_specific_menu_class_atts( $atts, $item, $args ) {
  // check if the item is set to target="_blank"
  $atts['class'] = 'navigation__link';
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_class_atts', 10, 3 );