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

/* ===== Post View Count ===== */
function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function get_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 বার পড়া হয়েছে";
    }
    return $count . " বার পড়া হয়েছে";
}