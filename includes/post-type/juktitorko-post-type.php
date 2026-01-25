<?php

function juktitorko_post_type()
{
  register_post_type('juktitorko', array(
    'labels' => array(
      'name' => __('যুক্তিতর্ক', 'khoborer-kagoj'),
      'singular_name' => 'Juktitorko Item',
      'add_new_item' => 'Add New Juktitorko Item',
      'edit_item' => 'Edit Juktitorko Item',
      'view_item' => 'View Juktitorko Item',
      'new_item' => 'New Juktitorko Item',
      'search_item' => 'Search Juktitorko Item',
      'not_found' => 'No Juktitorko Item',
      'all_items' => 'All Juktitorko Items'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-businessperson',
    'has_archive' => true,
    'rewrite' => array('slug' => 'juktitorko'),
    'menu_position' => 20,
    'publicly_queryable' => true,
    'query_var' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'supports' => array('title','editor', 'custom-fields', 'thumbnail'),
    'taxonomies' => array('category'),
  ));
}
add_action('init', 'juktitorko_post_type');