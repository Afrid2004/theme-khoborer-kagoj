<?php 

function media_theme_css_js(): void {
    // CSS Files
    //wp_enqueue_style('bootstrap-min-css-5-3-7', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css', array(), '5.3.7', 'all');
    wp_enqueue_style('bootstrap-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0', 'all');
    wp_enqueue_style('bootstrap-icon-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css', array(), '1.13.1', 'all');
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '6.7.2', 'all');
    wp_enqueue_style('khoborerkagoj-theme-style-css', get_stylesheet_directory_uri() . '/assets/css/style.css',array(),'1.0','all');
    wp_enqueue_style('khoborerkagoj-responsive-style-css', get_stylesheet_directory_uri() . '/assets/css/responsive.css',array(),'1.0','all');

    // JS Files
    wp_enqueue_script('bootstrap-bundle-min-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
    wp_enqueue_script('swiper-bundle-min-js', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', array('jquery'), '12.0.1', true);
    wp_enqueue_script('lightgallery-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/lightgallery.min.js', array('jquery'), '2.8.3', true);
}
add_action('wp_enqueue_scripts', 'media_theme_css_js');