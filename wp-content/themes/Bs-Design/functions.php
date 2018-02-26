<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */
add_action('admin_menu','remove_default_post_type');

function remove_default_post_type() {
	remove_menu_page('edit.php');
}

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

define( 'DISALLOW_FILE_EDIT', true );