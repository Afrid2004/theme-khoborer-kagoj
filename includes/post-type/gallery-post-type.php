<?php

function gallery_post_type()
{
  register_post_type('gallery', array(
    'labels' => array(
      'name' => __('গ্যালারি', 'khoborer-kagoj'),
      'singular_name' => 'Gallery Item',
      'add_new_item' => 'Add New Gallery Item',
      'edit_item' => 'Edit Gallery Item',
      'view_item' => 'View Gallery Item',
      'new_item' => 'New Gallery Item',
      'search_item' => 'Search Gallery Item',
      'not_found' => 'No Gallery Item',
      'all_items' => 'All Gallery Items'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-format-gallery',
    'has_archive' => true,
    'rewrite' => array('slug' => 'gallery'),
    'menu_position' => 21,
    'publicly_queryable' => true,
    'query_var' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'supports' => array('title','editor', 'custom-fields', 'thumbnail'),
    'taxonomies' => array('category'),
  ));
}
add_action('init', 'gallery_post_type');