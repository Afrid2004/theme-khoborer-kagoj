<?php

  // adding class on nav li
  function add_class_on_nav_li($classes, $item, $args, $depth ){
    if($args->theme_location === 'primary-menu'){
      $classes[] = 'nav-item';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'add_class_on_nav_li', 10, 4);


  //adding class on nav li a
  function add_class_on_nav_li_a($atts, $item, $args, $depth){
    if($args->theme_location === 'primary-menu'){
      $exixting_class = isset($atts['class']) ? $atts['class'] : '';
      $atts['class'] = $exixting_class . ' nav-link text-white font-size-16 fw-normal custom-link';
    }
    return $atts;
  }
  add_filter('nav_menu_link_attributes', 'add_class_on_nav_li_a', 10, 4);





    // adding class on category li
  function add_class_on_category_li($classes, $item, $args, $depth ){
    if($args->theme_location === 'category-menu'){
      $classes[] = 'tranding-heading py-1 mb-2 px-3 rounded heading list-unstyled';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'add_class_on_category_li', 10, 4);


  //adding class on category li a
  function add_class_on_category_li_a($atts, $item, $args, $depth){
    if($args->theme_location === 'category-menu'){
      $exixting_class = isset($atts['class']) ? $atts['class'] : '';
      $atts['class'] = $exixting_class . ' text-decoration-none text-black font-size-20 category-menu';
    }
    return $atts;
  }
  add_filter('nav_menu_link_attributes', 'add_class_on_category_li_a', 10, 4);





  // adding class on country, district category li
  function add_class_on_country_district_category_li($classes, $item, $args, $depth ){
    if($args->theme_location === 'country-menu' || $args->theme_location === 'district-menu'){
      $classes[] = 'text-danger';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'add_class_on_country_district_category_li', 10, 4);


  //adding class on country, district category li a
  function add_class_on_country_district_category_li_a($atts, $item, $args, $depth){
    if($args->theme_location === 'country-menu' || $args->theme_location === 'district-menu'){
      $exixting_class = isset($atts['class']) ? $atts['class'] : '';
      $atts['class'] = $exixting_class . ' text-decoration-none text-dark pe-3';
    }
    return $atts;
  }
  add_filter('nav_menu_link_attributes', 'add_class_on_country_district_category_li_a', 10, 4);