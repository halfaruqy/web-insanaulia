<?php

require_once (__DIR__.'/wp-custom-modules/WordPressMenuClasses.php');

function boilerplate_load_assets() {
  wp_enqueue_script('mainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
  wp_enqueue_style('maincss', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
  register_nav_menu('footer1', 'Tentang Kami (FOOTER)');
  register_nav_menu('footer2', 'Informasi (FOOTER)');
  register_nav_menu('footer3', 'Extras (FOOTER)');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

function special_nav_class($classes, $item){
  if( in_array('current-menu-item', $classes) || in_array('current-page-ancestor', $classes)){
      $classes[] = 'text-primary-600 hover:text-primary-950';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_current_page_class($classes, $item) {
  if( in_array('current_page_item', $classes)) {
    $classes[] = 'text-primary-600 hover:text-primary-950 transition-all';
  }
  return $classes;
}
add_filter( 'page_css_class', 'special_current_page_class', 10, 2 );

function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function add_menu_list_item_class($classes, $item, $args) {
  if(property_exists($args, 'list_item_class')) {
    $classes[] = $args -> list_item_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

// Get top ancestor
function get_top_ancestor_id() {
  global $post;

  if ($post->post_parent) {
    $ancestors = array_reverse(get_post_ancestors( $post -> ID ));
    return $ancestors[0];
  }

  return $post->ID;
}


