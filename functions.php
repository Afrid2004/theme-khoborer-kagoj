<?php 

//css and js file
if (file_exists(get_template_directory() . '/includes/helpers/khoborer-kagoj-theme-css-js.php')) {
  require_once('includes/helpers/khoborer-kagoj-theme-css-js.php');
}

//register navbar
if (file_exists(get_template_directory() . '/includes/helpers/khoborer-kagoj-theme-register-navbar.php')) {
  require_once('includes/helpers/khoborer-kagoj-theme-register-navbar.php');
}

//add class on nav li a 
if (file_exists(get_template_directory() . '/includes/helpers/add-class-on-nav-li-a.php')) {
  require_once('includes/helpers/add-class-on-nav-li-a.php');
}

//nav walker for dropdown menus 
if (file_exists(get_template_directory() . '/includes/helpers/class-wp-bootstrap-5.3.7-navwalker.php')) {
  require_once('includes/helpers/class-wp-bootstrap-5.3.7-navwalker.php');
}

//date and time file include 
if (file_exists(get_template_directory() . '/includes/helpers/date-and-time.php')) {
  require_once('includes/helpers/date-and-time.php');
}

//bangla date file include 
if (file_exists(get_template_directory() . '/includes/helpers/bangla-date.php')) {
  require_once('includes/helpers/bangla-date.php');
}

//post publish time with category 
if (file_exists(get_template_directory() . '/includes/helpers/post-publish-time-with-category.php')) {
  require_once('includes/helpers/post-publish-time-with-category.php');
}

// all-categories
if (file_exists(get_template_directory() . '/includes/customizer/all-categories.php')) {
  include_once('includes/customizer/all-categories.php');
}

//for creating auto pages
if (file_exists(get_template_directory() . '/includes/helpers/after-switch-theme.php')) {
  require_once('includes/helpers/after-switch-theme.php');
}

// after setup theme
if (file_exists(get_template_directory() . '/includes/helpers/after-setup-theme.php')) {
  include_once('includes/helpers/after-setup-theme.php');
}

//for juktitorko post type
if (file_exists(get_template_directory() . '/includes/post-type/juktitorko-post-type.php')) {
    include_once('includes/post-type/juktitorko-post-type.php');
}

//gallery post type
if (file_exists(get_template_directory() . '/includes/post-type/gallery-post-type.php')) {
    include_once('includes/post-type/gallery-post-type.php');
}

//npa customizer
if (file_exists(get_template_directory() . '/includes/customizer/npa-customizer.php')) {
    include_once('includes/customizer/npa-customizer.php');
}

//for class-tgm-plugin-activation
if (file_exists(get_template_directory() . '/includes/helpers/class-tgm-plugin-activation.php')) {
    include_once('includes/helpers/class-tgm-plugin-activation.php');
}

//for tgm
if (file_exists(get_template_directory() . '/includes/helpers/tgm.php')) {
    include_once('includes/helpers/tgm.php');
}