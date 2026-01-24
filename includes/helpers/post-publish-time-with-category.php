<?php
/**
 * Returns category link + time ago in Bangla
 * Usage: khoborerkagoj_category_with_time_ago($category_id);
 */
/**
 * Category + Time (24h পর্যন্ত ago, 24h+ হলে Date) – TIMEZONE FIXED
 */
function khoborerkagoj_category_with_time_ago($forced_cat_id = 0) {

    // 1️⃣ category
    if (!empty($forced_cat_id)) {
        $category = get_category((int) $forced_cat_id);
    } else {
        $cats = get_the_category();
        $category = !empty($cats) ? $cats[0] : null;
    }

    $category_name = $category ? esc_html($category->name) : 'নিউজ';
    $category_link = $category ? esc_url(get_category_link($category->term_id)) : '#';

    $category_html = '<a class="text-dark text-decoration-none" href="'.$category_link.'">'.$category_name.'</a>';

    // ✅ BOTH LOCAL TIME (Asia/Dhaka)
    $post_time = strtotime(get_post()->post_date); 
    $now_time  = current_time('timestamp');

    $diff_seconds = $now_time - $post_time;

    // digits
    $eng_digits  = ['0','1','2','3','4','5','6','7','8','9'];
    $bang_digits = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];

    // 🔴 24 ঘণ্টা পার হলে → Date
    if ($diff_seconds >= DAY_IN_SECONDS) {

        $date = get_the_date('j F Y');

        $months_en = [
            'January','February','March','April','May','June',
            'July','August','September','October','November','December'
        ];
        $months_bn = [
            'জানুয়ারি','ফেব্রুয়ারি','মার্চ','এপ্রিল','মে','জুন',
            'জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর'
        ];

        $date = str_replace($months_en, $months_bn, $date);
        $date = str_replace($eng_digits, $bang_digits, $date);

        $time_html = $date;

    } else {

        // 🔵 24 ঘণ্টার ভেতরে → ago
        $time_diff = human_time_diff($post_time, $now_time);

        $eng  = ['seconds','second','minutes','minute','hours','hour'];
        $bang = ['সেকেন্ড','সেকেন্ড','মিনিট','মিনিট','ঘন্টা','ঘন্টা'];

        $time_html = str_replace($eng, $bang, $time_diff) . ' আগে';
        $time_html = str_replace($eng_digits, $bang_digits, $time_html);
    }

    return $category_html . ' | ' . $time_html;
}