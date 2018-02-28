<?php
/*
 *  Author: Brian J. Schneide
 *  URL: brianschneide.com
 * 
 */

 // Load in styles and scripts to wordpress

function bs_scripts() {
	// Add custom fonts, used in the main stylesheets

  // Theme stylesheet.
  
  wp_enqueue_style( 'bs-style', get_theme_file_uri( '/assets/styles/css/main.css' )  );
  
  // bootstrap styles

  wp_enqueue_style('bootstrap', get_theme_file_uri( '/assets/styles/css/vendors/bootstrap.css' ) );

  // bootstrap responsive

  wp_enqueue_style('bootstrap-responsive', get_theme_file_uri( '/assets/styles/css/vendors/bootstrap-responsive.css') );

}

add_action( 'wp_enqueue_scripts', 'bs_scripts' );


// removes posts tab in admin panel

add_action('admin_menu','remove_default_post_type');

function remove_default_post_type() {
	remove_menu_page('edit.php');
}

// removes comments tab in admin panel

add_action('admin_menu','remove_comments');

function remove_comments() {
    remove_menu_page('edit-comments.php');
}

// Creates a custom post type for Scenes

function create_post_type() {
    register_post_type( 'Scene',
      array(
        'labels' => array(
          'name'          => __( 'Scenes' ),
          'singular_name' => __( 'Scene' ),
          'add_new'       => 'Create Scene',
          'edit_item'     => 'Edit Scene',
          'new_item'      => 'New Scene',
          'view_item'     => 'View Scene'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array(
          'editor',
          'custom-fields',
          'title',

        )
      )
    );
  }
  add_action( 'init', 'create_post_type' );

// Creates a custom post type for projects

  function create_project() {
    register_post_type( 'Project',
      array(
        'labels' => array(
          'name'          => __( 'Projects' ),
          'singular_name' => __( 'Project' ),
          'add_new'       => 'Create Project',
          'edit_item'     => 'Edit Project',
          'new_item'      => 'New Project',
          'view_item'     => 'View Project'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-clipboard',
      )
    );
  }
  add_action( 'init', 'create_project' );

  // register navigation menu

  add_action('init', 'register_primary_menu');

  function register_primary_menu() {
  register_nav_menus( array(
	'primary' => 'Header Menu'
) );
}

function add_post_types_to_loop($query) {
    if ($query->is_main_query() && $query->is_front_page()) {
    $query->set('Scene', array('post', 'Scene'));
    }
    }
    add_action('pre_get_posts', 'add_post_types_to_loop');

    // remove widgets from wordpress

    function remove_dashboard_widgets() {
      global $wp_meta_boxes;
   
      unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
      unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
      unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
      unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
      unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
      unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
      unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
      unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
   
  }
   
  add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

  add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
 
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'Scene', array( 'Scene' ) );
    return $query;
}
