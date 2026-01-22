<?php 

  function khoborer_kagoj_theme_register_navbar(){
    register_nav_menus(array(
      'primary-menu'                  => __('Primary Menu', 'khoborer-kagoj'),
      'primary-extra-menu'            => __('Primary Extra Menu', 'khoborer-kagoj'),
      'footer-menu'                   => __('Footer Menu', 'khoborer-kagoj'),
      'category-menu'                 => __('Trending Category', 'khoborer-kagoj'),
      'country-menu'                  => __('Country Category', 'khoborer-kagoj'),
      'district-menu'                 => __('District Category', 'khoborer-kagoj'),
    ));
  }

  add_action('init', 'khoborer_kagoj_theme_register_navbar');