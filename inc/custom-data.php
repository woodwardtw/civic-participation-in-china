<?php
/**
 * Custom data setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



//publication custom post type

// Register Custom Post Type publication
// Post Type Key: publication

function create_publication_cpt() {

  $labels = array(
    'name' => __( 'Publications', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Publication', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Publication', 'textdomain' ),
    'name_admin_bar' => __( 'Publication', 'textdomain' ),
    'archives' => __( 'Publication Archives', 'textdomain' ),
    'attributes' => __( 'Publication Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Publication:', 'textdomain' ),
    'all_items' => __( 'All Publications', 'textdomain' ),
    'add_new_item' => __( 'Add New Publication', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Publication', 'textdomain' ),
    'edit_item' => __( 'Edit Publication', 'textdomain' ),
    'update_item' => __( 'Update Publication', 'textdomain' ),
    'view_item' => __( 'View Publication', 'textdomain' ),
    'view_items' => __( 'View Publications', 'textdomain' ),
    'search_items' => __( 'Search Publications', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into publication', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this publication', 'textdomain' ),
    'items_list' => __( 'Publication list', 'textdomain' ),
    'items_list_navigation' => __( 'Publication list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Publication list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'publication', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'publication', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_publication_cpt', 0 );


//member custom post type

// Register Custom Post Type member
// Post Type Key: member

function create_member_cpt() {

  $labels = array(
    'name' => __( 'Members', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Member', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Member', 'textdomain' ),
    'name_admin_bar' => __( 'Member', 'textdomain' ),
    'archives' => __( 'Member Archives', 'textdomain' ),
    'attributes' => __( 'Member Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Member:', 'textdomain' ),
    'all_items' => __( 'All Members', 'textdomain' ),
    'add_new_item' => __( 'Add New Member', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Member', 'textdomain' ),
    'edit_item' => __( 'Edit Member', 'textdomain' ),
    'update_item' => __( 'Update Member', 'textdomain' ),
    'view_item' => __( 'View Member', 'textdomain' ),
    'view_items' => __( 'View Members', 'textdomain' ),
    'search_items' => __( 'Search Members', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into member', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this member', 'textdomain' ),
    'items_list' => __( 'Member list', 'textdomain' ),
    'items_list_navigation' => __( 'Member list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Member list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'member', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'member', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_member_cpt', 0 );