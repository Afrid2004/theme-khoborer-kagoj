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


/**
 * Category archive main query adjust for offset-based pagination
 * প্রথম ৮টা পোস্ট উপরে (lead + grid) দেখানোর পর
 * নিচের লিস্টে প্রতি পেজে ২টা করে পোস্ট দেখাবে।
 */
function khoborer_kagoj_adjust_category_query( $query ) {
    if ( is_admin() || ! $query->is_main_query() || ! $query->is_category() ) {
        return;
    }

    $posts_per_page = 4;
    $initial_offset = 8;

    $paged = (int) $query->get( 'paged' );
    if ( $paged < 1 ) {
        $paged = 1;
    }

    $offset = $initial_offset + ( ( $paged - 1 ) * $posts_per_page );

    $query->set( 'posts_per_page', $posts_per_page );
    $query->set( 'offset', $offset );
}
add_action( 'pre_get_posts', 'khoborer_kagoj_adjust_category_query' );

/**
 * found_posts ঠিক করে দিচ্ছি যাতে paginate_links এর total pages
 * = ceil( (total_posts - 8) / 2 )
 * হয় এবং /page/3 কে আর invalid ধরে home এ redirect না করে।
 */
function khoborer_kagoj_adjust_category_found_posts( $found_posts, $query ) {
    if ( is_admin() || ! $query->is_main_query() || ! $query->is_category() ) {
        return $found_posts;
    }

    $initial_offset = 8;
    $adjusted = $found_posts - $initial_offset;

    if ( $adjusted < 0 ) {
        $adjusted = 0;
    }

    return $adjusted;
}
add_filter( 'found_posts', 'khoborer_kagoj_adjust_category_found_posts', 10, 2 );





// AJAX handler
add_action('wp_ajax_live_search', 'ajax_live_search');
add_action('wp_ajax_nopriv_live_search', 'ajax_live_search');

function ajax_live_search() {
    $query = sanitize_text_field($_GET['query'] ?? '');
    if(empty($query)) {
        wp_send_json([]);
    }

    $args = [
        'post_type' => 'post',
        's' => $query,
        'posts_per_page' => 5,
    ];

    $search = new WP_Query($args);
    $results = [];

    if($search->have_posts()) {
        while($search->have_posts()) {
            $search->the_post();
            $results[] = [
                'title' => get_the_title(),
                'url' => get_permalink(),
                'image' => get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?: get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg',
            ];
        }
    }

    wp_reset_postdata();
    wp_send_json($results);
}





function khoborer_kagoj_enqueue_scripts() {
    wp_enqueue_script('live-search', get_stylesheet_directory_uri() . '/assets/JavaScript/live-search.js', ['jquery'], null, true);

    // AJAX URL JS-এ পাঠানো
    wp_localize_script('live-search', 'ajax_object', [
        'ajax_url' => admin_url('admin-ajax.php')
    ]);
}
add_action('wp_enqueue_scripts', 'khoborer_kagoj_enqueue_scripts');