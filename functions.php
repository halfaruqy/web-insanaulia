<?php

require_once (__DIR__.'/wp-custom-modules/WordPressMenuClasses.php');

add_post_type_support( 'event', 'thumbnail' );
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





//Customize the styling of WP login page

function custom_login_css() {
  echo 
  '<style type="text/css">
    .login {
      color: #461a04;
    }
    .login h1 a {
      background-image: url("http://insan-aulia.local/wp-content/uploads/2024/05/cropped-logo-sekolah.png");
      background-size: contain;
      background-position: center;
      background-repeat: no-repeat;
      margin: 0;
      width: 100%;
      height: 96px;
      margin-bottom: 4rem;
    }
    input[type=checkbox]:focus, input[type=color]:focus, input[type=date]:focus, input[type=datetime-local]:focus, input[type=datetime]:focus, input[type=email]:focus, input[type=month]:focus, input[type=number]:focus, input[type=password]:focus, input[type=radio]:focus, input[type=search]:focus, input[type=tel]:focus, input[type=text]:focus, input[type=time]:focus, input[type=url]:focus, input[type=week]:focus, select:focus, textarea:focus {
      border-color: #ff7600;
      box-shadow: 0 0 0 1px #ff7600;
      outline: 2px solid transparent;
    }
    .login .message, .login .notice, .login .success {
      border-left: 4px solid #ff7600;
      padding: 12px;
      margin-left: 0;
      margin-bottom: 20px;
      background-color: #fff9ec;
      box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      word-wrap: break-word;
    }
    .wp-core-ui .button {
      color: #461a04;
      border-color: #ffaa32;
      background: #fff9ec;
      vertical-align: top;
      box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      transition: all 0.25s;
      font-weight: 500;
    }
    .wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover, .wp-core-ui .button-secondary:focus, .wp-core-ui .button.focus, 
    .wp-core-ui .button:focus {
      background: #fff9ec;
      border-color: #ffaa32;
      color: #461a04;
    }
    .wp-core-ui .button-primary {
      color: #fff9ec;
      border-color: #ffaa32;
      background: #ff7600;
      vertical-align: top;
      box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      transition: all 0.25s;
      font-weight: 500;
    }
    .wp-core-ui .button-secondary:hover, .wp-core-ui .button.hover, .wp-core-ui .button:hover {
      border-color: #ffaa32;
      color: #a1420b;
    }
    .login .button.wp-hide-pw:focus {
      background: 0 0;
      border-color: #ff7600;
      box-shadow: 0 0 0 1px #ff7600;
      outline: 2px solid transparent;
    }
    .wp-core-ui .button-primary.focus, .wp-core-ui .button-primary:focus {
      box-shadow: 0 0 0 1px #fff,0 0 0 3px #ff7600;
    }
    .login .button.wp-hide-pw {
      transition: all 0.1s;
    }
    a:focus {
      color: #a1420b;
      box-shadow: 0 0 0 2px #ff7600;
      outline: 2px solid transparent;
    }
    a {
      color: #461a04;
      transition-property: border,background,color;
      transition-duration: .05s;
      transition-timing-function: ease-in-out;
    }
    .wp-core-ui select:focus {
      border-color: #ff7600;
      color: #a1420b;
      box-shadow: 0 0 0 1px #ff7600;
    }
    .login form {
      margin-top: 20px;
      margin-left: 0;
      padding: 26px 24px 34px;
      font-weight: 400;
      overflow: hidden;
      background: #fff9ec;
      border: 1px solid #ff7600;
      box-shadow: 0 1px 3px rgba(0,0,0,.04);
    }
  </style>';
}
add_action( 'login_head', 'custom_login_css' );

