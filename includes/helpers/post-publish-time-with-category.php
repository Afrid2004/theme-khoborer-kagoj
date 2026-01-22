<?php
/**
 * Returns category link + time ago in Bangla
 * Usage: khoborerkagoj_category_with_time_ago($category_id);
 */
function khoborerkagoj_category_with_time_ago($forced_cat_id = 0) {

    // 1️⃣ category decide
    if (!empty($forced_cat_id)) {
        // section/category passed from query
        $category = get_category((int) $forced_cat_id);
    } else {
        // fallback → first post category
        $categories = get_the_category();
        $category = !empty($categories) ? $categories[0] : null;
    }

    if ($category) {
        $category_name = esc_html($category->name);
        $category_link = esc_url(get_category_link($category->term_id));
    } else {
        $category_name = 'নিউজ';
        $category_link = '#';
    }

    $category_html = '<a class="text-dark text-decoration-none" href="' . $category_link . '">' . $category_name . '</a>';

    // 2️⃣ time ago
    $post_time = strtotime(get_post()->post_date);
    $now_time  = current_time('timestamp');
    $time_diff = human_time_diff($post_time, $now_time);

    // English → Bangla words
    $eng  = ['seconds','second','minutes','minute','hours','hour','days','day','weeks','week','months','month','years','year'];
    $bang = ['সেকেন্ড','সেকেন্ড','মিনিট','মিনিট','ঘন্টা','ঘন্টা','দিন','দিন','সপ্তাহ','সপ্তাহ','মাস','মাস','বছর','বছর'];

    $time_ago_bn = str_replace($eng, $bang, $time_diff) . ' আগে';

    // English → Bangla digits
    $eng_digits  = ['0','1','2','3','4','5','6','7','8','9'];
    $bang_digits = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];

    $time_ago_bn = str_replace($eng_digits, $bang_digits, $time_ago_bn);

    return $category_html . ' | ' . $time_ago_bn;
}