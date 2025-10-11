<?php 

  function khoborer_kagoj_theme_register_navbar(){
    register_nav_menus(array(
      'primary-menu' => __('Primary Menu', 'khoborer-kagoj'),
      'footer-menu' => __('Footer Menu', 'khoborer-kagoj'),
    ));
  }

  add_action('init', 'khoborer_kagoj_theme_register_navbar');