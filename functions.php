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