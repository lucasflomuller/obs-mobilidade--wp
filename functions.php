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

// Filter except length to 35 words.
// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
  return 35;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

function faba_equipe_column_headers($columns) {

  //crating custom column header data

  $columns = array(
    'cb'=>'<input type="checkbox"/>',
    'title'=>__("Nome"),
    'profissao'=>__('Profissão'),
    'funcao'=>__('Função'),
    'curriculo'=>__('Currículo')
  );
  // returning new columns
 return $columns;
}

add_filter('manage_edit-equipe_columns', 'faba_equipe_column_headers');

function faba_equipe_columns_data( $column, $post_id ) {
  // setup our return text

  $output = '';

  switch ( $column ) {
    case 'title':
      //get the custom name data
    
      $fname = get_field('equipe_name', $post_id);

      $output .= $fname;

      break;

      case 'profissao':
      //get the custom name datay
    
      $profissao = get_field('profissao', $post_id);

      $output .= $profissao;

      break;

      case 'funcao':
      //get the custom name data
    
      $funcao = get_field('funcao', $post_id);

      $output .= $funcao;

      break;

      case 'curriculo':
      //get the custom name data
    
      $curriculo = get_field('curriculo', $post_id);

      $output .= $curriculo;

      break;
  }
  //echo the outuput

  echo $output;
}

add_filter('manage_equipe_posts_custom-column', 'faba_equipe_columns_data',1,2);
