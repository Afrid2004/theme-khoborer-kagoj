<?php
$wp_customize->add_section('npa_footer_area', array(
    'title'         =>  __('Editor Name, Address, Email, Phone etc.', 'khoborer-kagoj'),
    'description'   => 'If you want to update Editor Name, Address, Email, Phone etc., you can do it here.',
    'panel'         => 'npa_footer_panel',
));

/**
 * ==========================
 * Editor
 * ==========================
 */
$wp_customize->add_setting('editorName', array(
    'default'       => 'এস এ ফারুক',
    'transport'     => 'refresh',
));
$wp_customize->add_control('editorName', array(
    'label'     => __('সম্পাদক', 'khoborer-kagoj'),
    'settings'  => 'editorName',
    'section'   => 'npa_footer_area',
    'type'      => 'text'
));

/**
 * ==========================
 * Editor Email
 * ==========================
 */
$wp_customize->add_setting('editor_email', array(
    'default'       => 'faroque.computer@gmail.com',
    'transport'     => 'refresh',
));
$wp_customize->add_control('editor', array(
    'label'     => __('সম্পাদকের ই-মেইল', 'khoborer-kagoj'),
    'settings'  => 'editor_email',
    'section'   => 'npa_footer_area',
    'type'      => 'text'
));


/**
 * ==========================
 * Address
 * ==========================
 */
$wp_customize->add_setting('address', array(
    'default'       => 'ঢাকা',
    'transport'     => 'refresh',
));
$wp_customize->add_control('address', array(
    'label'     => __('ঠিকানা', 'khoborer-kagoj'),
    'settings'  => 'address',
    'section'   => 'npa_footer_area',
    'type'      => 'text'
));

/**
 * ==========================
 * বার্তা, সম্পাদকীয় ও ফিচার বিভাগ
 * ==========================
 */
$wp_customize->add_setting('news_editorial_department_phone', array(
    'default'       => '+৮৮০২২২৬৬৬৫০৫৩-৪',
    'transport'     => 'refresh',
));
$wp_customize->add_control('news_editorial_department_phone', array(
    'label'     => __('বার্তা, সম্পাদকীয় ও ফিচার বিভাগের ফোন নাম্বার', 'khoborer-kagoj'),
    'settings'  => 'news_editorial_department_phone',
    'section'   => 'npa_footer_area',
    'type'      => 'text'
));


/**
 * ==========================
 * বিজ্ঞাপন
 * ==========================
 */
$wp_customize->add_setting('advertisement_phone', array(
    'default'       => '+৮৮০২২২৬৬৬৫০৫১',
    'transport'     => 'refresh',
));
$wp_customize->add_control('advertisement_phone', array(
    'label'     => __('বিজ্ঞাপন ফোন নাম্বার', 'khoborer-kagoj'),
    'settings'  => 'advertisement_phone',
    'section'   => 'npa_footer_area',
    'type'      => 'text'
));


/**
 * ==========================
 * সার্কুলেশন
 * ==========================
 */
$wp_customize->add_setting('circulation_phone', array(
    'default'       => '+৮৮০২২২৬৬৬৫০৫২',
    'transport'     => 'refresh',
));
$wp_customize->add_control('circulation_phone', array(
    'label'     => __('সার্কুলেশন ফোন নাম্বার', 'khoborer-kagoj'),
    'settings'  => 'circulation_phone',
    'section'   => 'npa_footer_area',
    'type'      => 'text'
));

/**
 * ==========================
 * Email
 * ==========================
 */
$wp_customize->add_setting('email', array(
    'default'       => 'info@khaborerkagoj.com',
    'transport'     => 'refresh',
));
$wp_customize->add_control('email', array(
    'label'     => __('ইমেইল', 'khoborer-kagoj'),
    'settings'  => 'email',
    'section'   => 'npa_footer_area',
    'type'      => 'email'
));

/**
 * ==========================
 * Right Reserved Text
 * ==========================
 */
$wp_customize->add_setting('rightReserved', array(
    'default'       => '© ২০২৬ সর্বস্বত্ব সংরক্ষিত | খবরের কাগজ',
    'transport'     => 'refresh',
));
$wp_customize->add_control('rightReserved', array(
    'label'     => __('কপিরাইট টেক্সট', 'khoborer-kagoj'),
    'settings'  => 'rightReserved',
    'section'   => 'npa_footer_area',
    'type'      => 'text'
));