<?php
/**
 * Returns category link + time ago in Bangla with Bangla digits
 *
 * Example Output: "<a href='category-link'>জাতীয়</a> | ১৭ মিনিট আগে"
 */
function khoborerkagoj_category_with_time_ago() {

    // === Get first category ===
    $categories = get_the_category();
    
    if (!empty($categories)) {
        $category = $categories[0];
        $category_name = esc_html($category->name);
        $category_link = esc_url(get_category_link($category->term_id));
        $category_html = '<a class="text-dark text-decoration-none" href="' . $category_link . '">' . $category_name . '</a>';
    } else {
        $category_html = 'নিউজ';
    }

    // === Current post time (site timezone) ===
    $post_time = strtotime(get_post()->post_date); // পোস্ট publish time
    $now_time  = current_time('timestamp');        // এখনকার সময় (site timezone)

    // === Time difference ===
    $time_diff = human_time_diff($post_time, $now_time);

    // === English to Bangla words ===
    $eng  = ['seconds','second','minutes','minute','hours','hour','days','day','weeks','week','months','month','years','year'];
    $bang = ['সেকেন্ড','সেকেন্ড','মিনিট','মিনিট','ঘন্টা','ঘন্টা','দিন','দিন','সপ্তাহ','সপ্তাহ','মাস','মাস','বছর','বছর'];

    $time_ago_bn = str_replace($eng, $bang, $time_diff) . ' আগে';

    // === Convert English digits to Bangla digits ===
    $eng_digits = ['0','1','2','3','4','5','6','7','8','9'];
    $bang_digits = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];

    $time_ago_bn = str_replace($eng_digits, $bang_digits, $time_ago_bn);

    // === Return category link + time ago ===
    return $category_html . ' | ' . $time_ago_bn;
}