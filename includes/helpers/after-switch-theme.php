<?php
function khoborerkagoj_theme_setup_default_content()
{
    // === ১. ডিফল্ট পেইজ (parent-child সহ) ===
    $pages = array(
        'প্রচ্ছদ' => array(
            'content' => 'প্রচ্ছদ পেইজ',
        ),
        'সর্বশেষ' => array(
            'content' => 'আমাদের কথা পেইজ',
        ),
        'জাতীয়' => array(
            'content' => 'জাতীয় পেইজ',
        ),
        'রাজনীতি' => array(
            'content' => 'রাজনীতি পেইজ',
        ),
        'অর্থকড়ি' => array(
            'content' => 'অর্থকড়ি পেইজ',
        ),
        'বিশেষ প্রতিবেদন' => array(
            'content' => 'বিশেষ প্রতিবেদন পেইজ',
        ),
        'যোগাযোগ' => array(
            'content' => 'যোগাযোগ পেইজ',
        ),
        'বিশ্বগ্রাম' => array(
            'content' => 'বিশ্বগ্রাম পেইজ',
        ),
        'রূপসী বাংলা' => array(
            'content' => 'রূপসী বাংলা পেইজ',
        ),
        'খেলার ভুবন' => array(
            'content' => 'খেলার ভুবন পেইজ',
        ),
        'রঙ' => array(
            'content' => 'রঙ পেইজ',
        ),
        'সুবর্ণরেখা' => array(
            'content' => 'সুবর্ণরেখা পেইজ',
        ),
        'সাহিত্যসভা' => array(
            'content' => 'সাহিত্যসভা পেইজ',
        ),
        'ইসলাম' => array(
            'content' => 'ইসলাম পেইজ',
        ),
        'চট্টগ্রামের খবর' => array(
            'content' => 'চট্টগ্রামের খবর পেইজ',
        ),
    );

    // === Recursive Page Creator ===
    function create_page_recursive($title, $page_data, $parent_id = 0)
    {
        // WP_Query দিয়ে পেইজ খুঁজে বের করা
        $query = new WP_Query(array(
            'post_type'      => 'page',
            'title'          => $title,
            'posts_per_page' => 1,
            'post_status'    => 'any',
        ));

        if ($query->have_posts()) {
            $page_id = $query->posts[0]->ID;
        } else {
            $page_id = wp_insert_post(array(
                'post_title'   => $title,
                'post_content' => $page_data['content'],
                'post_status'  => 'draft',
                'post_type'    => 'page',
                'post_parent'  => $parent_id,
            ));
        }
        wp_reset_postdata();

        // যদি children থাকে তবে সেগুলো তৈরি করো
        if (!empty($page_data['children'])) {
            foreach ($page_data['children'] as $child_title => $child_content) {
                create_page_recursive($child_title, array(
                    'content'  => $child_content,
                    'children' => array(),
                ), $page_id);
            }
        }
    }

    // === সব পেইজ তৈরি করো ===
    foreach ($pages as $title => $page_data) {
        create_page_recursive($title, $page_data, 0);
    }

    // === ২. ডিফল্ট ক্যাটাগরি তৈরি ===
    $categories = array(
        'নিউজ ও ইভেন্টস',
    );

    foreach ($categories as $cat) {
        if (!term_exists($cat, 'category')) {
            wp_insert_term($cat, 'category', array(
                'slug' => sanitize_title($cat),
            ));
        }
    }
}
add_action('after_switch_theme', 'khoborerkagoj_theme_setup_default_content');